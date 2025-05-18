<?php

namespace App\Livewire\SchoolApp;

use App\Models\Applicant;
use App\Models\District;
use App\Models\School;
use App\Models\Team;
use App\Models\Thana;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TeamRegistration extends Component
{
    public $school_id, $district, $thana, $captain_name, $mentor_name, $players;
    public $thanasList = [];
    public $schoolList = [];
    public $districtsList = [];
    public $playerList = [];


    #[Layout('components.layouts.public')]
    public function mount()
    {
        $this->districtsList = collect([
            (object)['id' => '', 'name' => 'Choose District']
        ])->merge(District::orderBy('name', 'asc')->get());

        $this->thanasList = collect([
            (object)['id' => '', 'name' => 'Choose Thana/Upazila']
        ]);

        $this->schoolList = collect([
            (object)['id' => '', 'name' => 'Choose School']
        ]);

    }

    public function updatedDistrict($value)
    {
        $this->thanasList = collect([
            (object)['id' => '', 'name' => 'Choose Thana/Upazila']
        ])->merge(Thana::where('district_id', $value)->orderBy('name')->get());
        $this->thana = null;
        $this->dispatch('reinit-select2');

    }

    public function updatedThana($value)
    {
        $this->schoolList = collect([
            (object)['id' => '', 'name' => 'Choose School']
        ])->merge(School::where('thana_id', $value)->orderBy('name')->get());
        $this->school_id = null;

    }

    public function updatedSchoolId($value)
    {
        // Get all applicant IDs already used in teams from the selected school
        $assignedPlayerIds = Team::where('school_id', $value)
            ->pluck('players')
            ->filter() // remove nulls
            ->flatMap(function ($playersJson) {
                return json_decode($playersJson, true);
            })
            ->unique()
            ->toArray();

        // Load applicants from the school who are not already in any team of that school
        $this->playerList = Applicant::where('school_id', $value)
            ->whereNotIn('id', $assignedPlayerIds)
            ->orderBy('name')
            ->get(['id', 'name']);
    }

    public function render()
    {
        return view('livewire.school-app.team-registration');
    }

    public function submit()
    {
        $this->validate([
            'district' => 'required|exists:districts,id',
            'thana' => 'required|exists:thanas,id',
            'school_id' => 'required|exists:schools,id',
            'players'    => 'required|array|min:4|max:5',
        ], [
            'players.required' => 'Please select players.',
            'players.min' => 'You must select at least 4 players.',
            'players.max' => 'You cannot select more than 5 players.',
        ]);

        // Check if any selected player is already in another team
        $existingPlayers = Team::whereJsonContains('players', $this->players)->get();

        if ($existingPlayers->isNotEmpty()) {
            // You can optionally get the conflicting players to show in message
            $conflictedPlayers = [];

            foreach ($existingPlayers as $team) {
                foreach (json_decode($team->players, true) as $playerId) {
                    if (in_array($playerId, $this->players)) {
                        $conflictedPlayers[] = $playerId;
                    }
                }
            }

            $names = Applicant::whereIn('id', $conflictedPlayers)->pluck('name')->implode(', ');

            throw ValidationException::withMessages([
                'players' => "The following player(s) are already assigned to another team: $names",
            ]);
        }

        $playersData = Applicant::whereIn('id', $this->players)->get();



        $hasTwelveOrYounger = $playersData->contains(function ($player) {
            return Carbon::parse($player->dob)->age <= 12;
        });


        if (!$hasTwelveOrYounger) {
            throw ValidationException::withMessages([
                'players' => "At least one player must be below  12 years old.",
            ]);
        }

        Team::create([
            'district_id' => $this->district,
            'thana_id' => $this->thana,
            'school_id' => $this->school_id,
            'captain_name' => $this->captain_name,
            'mentor_name' => $this->mentor_name,
            'players' => json_encode($this->players), // if stored as JSON
        ]);

        session()->flash('success', 'Team registered successfully!');

        // Optionally reset the form
        $this->reset(['district', 'thana', 'school_id', 'players']);
        $this->mount(); // reload options


    }
}

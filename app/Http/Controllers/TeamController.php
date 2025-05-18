<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\District;
use App\Models\School;
use App\Models\Team;
use App\Models\Thana;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{

    public function showForm()
    {
        $districtsList = District::orderBy('name','asc')->get();
        return view('team-registration',compact('districtsList'));
    }

    public function getThanas($districtId)
    {
        $thanas = Thana::where('district_id', $districtId)->orderBy('name','asc')->get();
        return response()->json($thanas);
    }

    public function getSchools($thanaId)
    {
        $schools = School::where('thana_id', $thanaId)->orderBy('name','asc')->get();
        return response()->json($schools);
    }

    public function getPlayers($schoolId)
    {
        // Get all player IDs already assigned to a team in the same school
        $assignedPlayerIds = Team::where('school_id', $schoolId)
            ->pluck('players')
            ->filter() // remove null values
            ->flatMap(function ($playersJson) {
                return json_decode($playersJson, true); // parse JSON array
            })
            ->unique()
            ->toArray();

        // Return applicants who are not already assigned
        $players = Applicant::where('school_id', $schoolId)
            ->whereNotIn('id', $assignedPlayerIds)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json($players);
    }


    public function store(Request $request)
    {

        $request->validate([
            'district' => 'required|exists:districts,id',
            'thana' => 'required|exists:thanas,id',
            'school_id' => 'required|exists:schools,id',
            'players'    => 'required|array|min:4|max:5',
        ], [
            'players.required' => 'Please select players.',
            'players.min' => 'You must select at least 4 players.',
            'players.max' => 'You cannot select more than 5 players.',
        ]);

        $existingPlayers = Team::whereJsonContains('players', $request->players)->get();

        if ($existingPlayers->isNotEmpty()) {
            // You can optionally get the conflicting players to show in message
            $conflictedPlayers = [];

            foreach ($existingPlayers as $team) {
                foreach (json_decode($team->players, true) as $playerId) {
                    if (in_array($playerId, $request->players)) {
                        $conflictedPlayers[] = $playerId;
                    }
                }
            }

            $names = Applicant::whereIn('id', $conflictedPlayers)->pluck('name')->implode(', ');

            throw ValidationException::withMessages([
                'players' => "The following player(s) are already assigned to another team: $names",
            ]);
        }

        $playersData = Applicant::whereIn('id', $request->players)->get();



        $hasTwelveOrYounger = $playersData->contains(function ($player) {
            return Carbon::parse($player->dob)->age <= 12;
        });


        if (!$hasTwelveOrYounger) {
            throw ValidationException::withMessages([
                'players' => "At least one player must be below  12 years old.",
            ]);
        }

        Team::create([
            'district_id' => $request->district,
            'thana_id' => $request->thana,
            'school_id' => $request->school_id,
            'captain_name' => $request->captain_name,
            'mentor_name' => $request->mentor_name,
            'players' => json_encode($request->players), // if stored as JSON
        ]);

        session()->flash('success', 'Team registered successfully!');

        return redirect()->route('home');

    }

    public function teamList(Request $request)
    {
        if ($request->ajax()) {
            $teams = Team::with(['school', 'district', 'thana'])->get();

            foreach ($teams as $team) {
                $playerIds = json_decode($team->players, true);
                $team->player_names = Applicant::whereIn('id', $playerIds)->pluck('name')->toArray();
            }

            return DataTables::of($teams)
                ->addColumn('school_info', function ($team) {
                    return ($team->school->name ?? '-') . ' (' . ($team->thana->name ?? '-') . ', ' . ($team->district->name ?? '-'). ')';
                })
                ->addColumn('players', function ($team) {
                    return !empty($team->player_names) ? implode(', ', $team->player_names) : '-';
                })
                ->rawColumns(['school_info', 'players'])
                ->make(true);
        }

        return view('team-list');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\District;
use App\Models\School;
use App\Models\Team;
use App\Models\Thana;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $assignedPlayerIds = DB::table('team_player')
            ->whereIn('team_id', function ($query) use ($schoolId) {
                $query->select('id')
                    ->from('teams')
                    ->where('school_id', $schoolId);
            })
            ->pluck('applicant_id')
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



        if ($request->captain_id) {
            $players = $request->players;
            if (!in_array($request->captain_id, $players)) {
                throw ValidationException::withMessages([
                    'players' => 'The captain must be selected from the list of players.',
                ]);
            }
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
// Count existing teams in the same school
        $existingTeamsCount = Team::where('school_id', $request->school_id)->count();

        $teamNumber = $request->district . $request->thana . $request->school_id . ($existingTeamsCount + 1);

        try {

            DB::beginTransaction();


            $team = Team::create([
                'district_id' => $request->district,
                'thana_id' => $request->thana,
                'school_id' => $request->school_id,
                'captain_id' => $request->captain_id,
                'mentor_name' => $request->mentor_name,
                'team_number'=>$teamNumber,
            ]);

            foreach ($request->players as $index => $playerId) {
                DB::table('team_player')->insert([
                    'team_id' => $team->id,
                    'applicant_id' => $playerId,
                    'player_order' => $index + 1,
                    'created_at' => now(),
                ]);
            }
            DB::commit();

            session()->flash('success', 'Team registered successfully!');
            return redirect()->route('home');

        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('error', 'Team Create Error !'.$e->getMessage());
            return redirect()->back()->withInput();
        }



    }

    public function teamList(Request $request)
    {
        if ($request->ajax()) {
            $teams = Team::with(['school', 'district', 'thana', 'captain'])->orderBy('school_id')->get();

            foreach ($teams as $team) {
                // Get player IDs from team_player table
                $playerIds = \DB::table('team_player')
                    ->where('team_id', $team->id)
                    ->orderBy('player_order')
                    ->pluck('applicant_id')
                    ->toArray();

                if (!empty($playerIds)) {
                    $team->player_names = Applicant::whereIn('id', $playerIds)
                        ->orderByRaw("FIELD(id, " . implode(',', $playerIds) . ")")
                        ->pluck('name')
                        ->toArray();
                } else {
                    $team->player_names = [];
                }

                // Get captain name if needed
                $team->captain_name = $team->captain_id
                    ? Applicant::where('id', $team->captain_id)->value('name')
                    : '-';
            }

            return DataTables::of($teams)
                ->addColumn('school_info', function ($team) {
                    return ($team->school->name ?? '-') . ' (' . ($team->thana->name ?? '-') . ', ' . ($team->district->name ?? '-') . ')';
                })
                ->addColumn('players', function ($team) {
                    return !empty($team->player_names) ? implode(', ', $team->player_names) : '-';
                })
                ->addColumn('captain_name', function ($team) {
                    return $team->captain_name ?? '-';
                })
                ->addColumn('mentor_name', function ($team) {
                    return $team->mentor_name ?? '-';
                })
                ->addColumn('team_number', function ($team) {
                    return $team->team_number ?? '-';
                })
                ->rawColumns(['school_info', 'players'])
                ->make(true);
        }

        return view('team-list');
    }


}

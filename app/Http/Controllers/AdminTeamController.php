<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Team;
use App\Models\TeamPlayer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminTeamController extends Controller
{
    public function index(Request $request)
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
                ->addColumn('action', function ($team) {
                    $showUrl = route('admin.teams.show', $team->id);
                    $deleteUrl = route('admin.teams.destroy', $team->id);
                    return '
                    <div class="flex space-x-2">
                        <a href="' . $showUrl . '" class="inline-block px-3 py-1 text-sm text-white bg-blue-600 hover:bg-blue-700 rounded">
                            Show
                        </a>
                        <form action="' . $deleteUrl . '" method="POST" onsubmit="return confirm(\'Are you sure?\')" class="inline">
                            ' . csrf_field() . method_field('DELETE') . '
                            <button type="submit" class="inline-block px-3 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                ';
                })


                ->rawColumns(['school_info', 'players','action'])
                ->make(true);
        }

        return view('team.team-list');
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        // Delete all players of the team first
        $team->players()->delete();

        // Then delete the team
        $team->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }

    public function show($id)
    {
        $team = Team::with('players')->where('id',$id)->first();
        $teamPlayers = TeamPlayer::where('team_id',$team->id)
            ->leftjoin('applicants','applicants.id','team_player.applicant_id')
            ->get(['team_player.*','applicants.name']);
        return view('team.show',compact('team','teamPlayers'));

    }

}

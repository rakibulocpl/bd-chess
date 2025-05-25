<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Team;
use App\Models\TeamPlayer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminApplicantController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $applicants = Applicant::with(['school', 'thana_rel', 'district_rel'])
                ->orderBy('school_id')
                ->get();

            return DataTables::of($applicants)
                ->addColumn('school_info', function ($applicant) {
                    $school = $applicant->school->name ?? '-';
                    $thana_name = $applicant->thana_rel->name ?? '-';
                    $district_name = $applicant->district_rel->name ?? '-';
                    return "{$school} ({$thana_name}, {$district_name})";
                })
                ->addColumn('birth_info', function ($applicant) {
                    if ($applicant->dob) {
                        $dob = \Carbon\Carbon::parse($applicant->dob)->format('d/m/Y');
                        // Compare with 01/01/2025 instead of now
                        $compareDate = \Carbon\Carbon::createFromFormat('d/m/Y', '01/01/2025');
                        $diff = \Carbon\Carbon::parse($applicant->dob)->diff($compareDate);
                        $age = $diff->y . ' years ' . $diff->m . ' months ' . $diff->d . ' days';
                        return "{$dob} ({$age})";
                    }
                    return '-';
                })
                ->addColumn('action', function ($applicant) {
                    $showUrl = route('admin.applicant.show', $applicant->id);
                    $deleteUrl = route('admin.applicant.destroy', $applicant->id);
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
                ->rawColumns(['school_info', 'birth_info','action'])
                ->make(true);
        }

        return view('applicant.applicant-list');

    }

    public function destroy($id)
    {
        $player = Applicant::findOrFail($id);

        $teamPlayerExists = TeamPlayer::where('applicant_id', $player->id)->exists();

        if ($teamPlayerExists) {
            return redirect()->back()->with('error', 'Player is assigned to a team and cannot be deleted.');
        }

        $player->delete();

        return redirect()->back()->with('success', 'Player deleted successfully.');

    }


    //
}

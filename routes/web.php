<?php

use App\Http\Controllers\AdminApplicantController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Roles\RoleShow;
use App\Livewire\SchoolApp\SchoolAdd;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserShow;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/team-registration', [TeamController::class, 'showForm'])->name('home');
Route::get('/team-list', [TeamController::class, 'teamList'])->name('teamList');
Route::get('/campaign-details', [NoticeController::class, 'campaignDetails'])->name('campaignDetails');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('users',[UserController::class,'index'])->name('users.index')->middleware('can:user.view');
    Route::get('users/create',[UserController::class,'create'])->name('users.create')->middleware('can:user.create');
    Route::get('users/{id}/edit',[UserController::class,'edit'])->name('users.edit')->middleware('can:user.edit');
    Route::get('users/{id}',[UserController::class,'show'])->name('users.show')->middleware('can:user.view');

    /*roles*/
    Route::get('roles',[RoleController::class,'index'])->name('roles.index')->middleware('can:role.view');
    Route::get('roles/create',[RoleController::class,'create'])->name('roles.create')->middleware('can:role.create');
    Route::get('roles/{id}',[RoleController::class,'show'])->name('roles.show')->middleware('can:role.view');
    Route::get('roles/{id}/edit',[RoleController::class,'edit'])->name('roles.edit')->middleware('can:role.edit');

    Route::get('admin/teams',[AdminTeamController::class,'index'])->name('admin.teams.index');
    Route::get('admin/teams/create',[AdminTeamController::class,'create'])->name('admin.teams.create');
    Route::get('admin/teams/{id}',[AdminTeamController::class,'show'])->name('admin.teams.show');
    Route::get('admin/teams/{id}/edit',[AdminTeamController::class,'edit'])->name('admin.teams.edit');
    Route::delete('admin/teams/{id}/delete',[AdminTeamController::class,'destroy'])->name('admin.teams.destroy');

    Route::get('admin/applicants',[AdminApplicantController::class,'index'])->name('admin.applicant.index');
    Route::get('admin/applicants/create',[AdminApplicantController::class,'create'])->name('admin.applicant.create');
    Route::get('admin/applicants/{id}',[AdminApplicantController::class,'show'])->name('admin.applicant.show');
    Route::get('admin/applicants/{id}/edit',[AdminApplicantController::class,'edit'])->name('admin.applicant.edit');
    Route::delete('admin/applicants/{id}/delete',[AdminApplicantController::class,'destroy'])->name('admin.applicant.destroy');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');


});

Route::get('schools/create', SchoolAdd::class)->name('schools.create');


Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.submit');


/*application*/
Route::get('/',[ApplicantController::class,'register'])->name('application.applicantRegister');
Route::post('application/applicant/register',[ApplicantController::class,'store'])->name('application.applicantStore');
Route::get('application/applicant/player-list',[ApplicantController::class,'playerList'])->name('application.playerList');
Route::get('/notice', [NoticeController::class, 'index'])->name('notice');

Route::get('/get-thanas/{districtId}', [TeamController::class, 'getThanas'])->name('get-thanas');
Route::get('/get-schools/{thanaId}', [TeamController::class, 'getSchools'])->name('get-schools');
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');

Route::get('/get-players/{schoolId}', [TeamController::class, 'getPlayers']);




require __DIR__.'/auth.php';

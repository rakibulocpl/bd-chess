<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TeamController;
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

    Route::get('users',UserIndex::class)->name('users.index')->middleware('can:user.view');
    Route::get('users/create',UserCreate::class)->name('users.create')->middleware('can:user.create');
    Route::get('users/{id}/edit',UserEdit::class)->name('users.edit')->middleware('can:user.edit');
    Route::get('users/{id}',UserShow::class)->name('users.show')->middleware('can:user.view');

    /*roles*/
    Route::get('roles',RoleIndex::class)->name('roles.index')->middleware('can:role.view');
    Route::get('roles/create',RoleCreate::class)->name('roles.create')->middleware('can:role.create');
    Route::get('roles/{id}',RoleShow::class)->name('roles.show')->middleware('can:role.view');
    Route::get('roles/{id}/edit',RoleEdit::class)->name('roles.edit')->middleware('can:role.edit');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('schools/create', SchoolAdd::class)->name('schools.create');

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

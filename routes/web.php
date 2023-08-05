<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\AssignmentController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[ "tittle" => 'Beranda']);
})->name('home');

Route::get('/maskot', function () {
    return view('maskot',[ "tittle" => 'Maskot']);
})->name('home');

Route::get('/peta', function () {
    return view('peta',[ "tittle" => 'Peta']);
})->name('home');

// Route::get('/dashboard-admin', function () {
//     return view('admin.dashboard-admin',[ "tittle" => 'Admin']);
// })->name('home');
Route::get('/dashboard-admin', [AdminController::class, 'index']);
Route::get('/tugas', [AdminController::class, 'indexTugas']);
Route::get('/kuis', [AdminController::class, 'indexKuis']);
Route::get('/lihat-kuis', [AdminController::class, 'indexLihatKuis']);
Route::get('/form-kuis-admin', [AdminController::class, 'indexFormKuis']);

//Route Member
Route::middleware(['auth','checkRole:member'])->group(function (){
    Route::get('/dashboard', [MemberController::class, 'showDashboard']);
    //Menu Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/update-foto', [ProfileController::class, 'updateFoto'])->name('profile.update-foto');

    Route::get('/penugasan', [AssignmentController::class, 'showPenugasan']);
    Route::get('/buku-panduan', [Controller::class, 'showBukuPanduan']);
    Route::get('/pengenalan-ukm', [Controller::class, 'showPengenalanUKM']);
    Route::get('/sertifikat', [Controller::class, 'showSertifikat']);
    Route::get('/form-kuis', [Controller::class, 'showKuisUKM']);
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KegiatanPelatihanController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::get('admin', function () {
    return redirect(route('dashboard'));
});

Route::prefix('admin')->middleware(['auth:sanctum'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('anggota', AnggotaController::class);
    Route::get('tambah-anggota', [AnggotaController::class, 'add'])->name('tambah-anggota');
    Route::resource('program-kerja', ProgramKerjaController::class);
    Route::post('program-kerja/confirm', [ProgramKerjaController::class, 'confirm'])->name('program-kerja.confirm');
    Route::get('laporan-program-kerja', [LaporanController::class, 'programKerja'])->name('laporan-program-kerja');
    Route::get('laporan-program-kerja/{id}', [ProgramKerjaController::class, 'detail'])->name('program-kerja.detail');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::resource('kegiatan-pelatihan', KegiatanPelatihanController::class);
    Route::post('anggota/reset/${id}', [AnggotaController::class, 'reset'])->name('anggota.reset');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

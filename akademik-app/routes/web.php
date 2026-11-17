<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Semua route yang membutuhkan login
Route::middleware('auth')->group(function () {

    // Dashboard untuk semua role
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // ADMIN
    Route::middleware('role:admin')->group(function () {

        Route::get('/admin/users', function () {
            return view('admin.users');
        })->name('admin.users');

    });

    // ADMIN DAN DOSEN
    Route::middleware('role:admin,dosen')->group(function () {

        Route::get('/materi/manage', function () {
            return view('materi.manage');
        })->name('materi.manage');

        Route::get('/nilai/manage', function () {
            return view('nilai.manage');
        })->name('nilai.manage');

    });

    // SEMUA ROLE
    Route::get('/materi', function () {
        return view('materi.index');
    })->name('materi.index');

    // ADMIN DAN MAHASISWA
    Route::middleware('role:admin,mahasiswa')->group(function () {
        Route::get('/nilai-saya', function () {
            return view('nilai.saya');
        })->name('nilai.saya');

    });

    // Profile bawaan Laravel Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

// Route autentikasi Laravel Breeze
require __DIR__.'/auth.php';

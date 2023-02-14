<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\LoginAdminController;
use App\Http\Controllers\admin\PasienController;
use App\Http\Controllers\admin\PoliController;
use App\Http\Controllers\admin\AntrianPoliController;

Route::get('/', function(){
        return redirect('/admin/dashboard');
    });

// Logout Admin
Route::get('/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');

// Guest Admin
Route::middleware(['guest:admin'])->group(function () {
    Route::get('/login', [LoginAdminController::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginAdminController::class, 'authenticate']);
});

// Required Login Admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', function (){
        return view('admin.dashboard-admin', [
            'title'=>'Dashboard',
        ]);
    });

    Route::resource('/pasien', PasienController::class);

    Route::resource('/poli', PoliController::class);

    Route::resource('/antrian_poli', AntrianPoliController::class);

    Route::get('/password', function (){
        return view('admin.password-admin', [
            'title'=>'Antrian Poli',
        ]);
    });
});
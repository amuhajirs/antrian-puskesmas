<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\admin\LoginAdminController;

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
    return view('home');
})->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/yea', function(){
    return view('dh_login');
});

// Guest Admin
Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('admin.login');
});

Route::get('/admin/dashboard', function (){
    return view('admin.dashboard-admin', [
        'title'=>'Dashboard',
    ]);
});

Route::get('/admin/pasien', function (){
    return view('admin.pasien-admin', [
        'title'=>'Data Pasien',
    ]);
});

Route::get('/admin/poli', function (){
    return view('admin.poli-admin', [
        'title'=>'Poli',
    ]);
});

Route::get('/admin/antrian_poli', function (){
    return view('admin.antrian-poli-admin', [
        'title'=>'Antrian Poli',
    ]);
});
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
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
});

// Guest Pasien
Route::middleware(['guest'])->group(function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('daftar');
});
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

// Require login Pasien
// Route::middleware(['auth:web'])->group(function () {

// });

// Guest Admin
// Route::middleware(['guest:admin'])->group(function () {
//     Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('login.admin');
// });
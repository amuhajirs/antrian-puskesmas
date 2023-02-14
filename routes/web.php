<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LoginModal;

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

// User
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/logout', [LoginModal::class, 'logout'])->name('logout');


// Admin
Route::prefix('/admin')->group(__DIR__.'/adminRoutes.php');
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LoginModal;

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

// User
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/logout', [LoginModal::class, 'logout'])->name('logout');



// Admin
Route::prefix('admin')->group(function (){
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

        Route::get('/pasien', function (){
            return view('admin.pasien-admin', [
                'title'=>'Data Pasien',
            ]);
        });

        Route::get('/poli', function (){
            return view('admin.poli-admin', [
                'title'=>'Poli',
            ]);
        });

        Route::get('/antrian_poli', function (){
            return view('admin.antrian-poli-admin', [
                'title'=>'Antrian Poli',
            ]);
        });

        Route::get('/password', function (){
            return view('admin.password-admin', [
                'title'=>'Antrian Poli',
            ]);
        });
    });
});
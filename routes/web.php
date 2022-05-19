<?php

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);  

        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'] ,'as' => 'admin']); 
        
        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);

        //Balita
        Route::resource('/balita', App\Http\Controllers\Admin\BalitaController::class, ['as' => 'admin']);

        //Petugas
        Route::resource('/petugas', App\Http\Controllers\Admin\PetugasController::class, ['except' => 'show' ,'as' => 'admin']);

        //Posyandu
        Route::resource('/posyandu', App\Http\Controllers\Admin\PosyanduController::class, ['except' => 'show' ,'as' => 'admin']);

        //Jadwal
        Route::resource('/jadwal', App\Http\Controllers\Admin\JadwalController::class, ['except' => 'show' ,'as' => 'admin']);

        //gizi
        Route::resource('/gizi', App\Http\Controllers\Admin\GiziController::class, ['as' => 'admin']);
    });
});
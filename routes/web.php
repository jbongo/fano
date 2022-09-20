<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

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



Route::controller(DashboardController::class)->group(function (){
    Route::get('/', 'index')->name('dashboard.index')->middleware(['auth']);
});

// Rôles
Route::controller(RoleController::class)->group(function (){
    Route::get('/roles', 'index')->name('role.index')->middleware(['auth']);
    Route::post('/role/ajouter', 'store')->name('role.store')->middleware(['auth']);
    Route::post('/role/modifier/{roleId}', 'update')->name('role.update')->middleware(['auth']);
    Route::put('/role/archiver/{roleId}', 'archive')->name('role.archive')->middleware(['auth']);
    Route::put('/role/desarchiver/{roleId}', 'unarchive')->name('role.unarchive')->middleware(['auth']);
});
Route::controller(PermissionController::class)->group(function (){
    Route::get('/permissions', 'index')->name('permission.index')->middleware(['auth']);
});
require __DIR__.'/auth.php';

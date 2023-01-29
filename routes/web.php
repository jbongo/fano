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
    Route::post('/role/desarchiver/{roleId}', 'unarchive')->name('role.unarchive')->middleware(['auth']);
    Route::post('/role/modifier/{roleId}', 'update')->name('role.update')->middleware(['auth']);
    Route::put('/role/archiver/{roleId}', 'archive')->name('role.archive')->middleware(['auth']);
    Route::get('/role/permissions/{roleId}', 'permissions')->name('role.permissions')->middleware(['auth']);
    Route::post('/role/permissions/{roleId}', 'updatePermissions')->name('role.update_permissions')->middleware(['auth']);
});
Route::controller(PermissionController::class)->group(function (){
    Route::get('/permissions', 'index')->name('permission.index')->middleware(['auth']);
    Route::post('/permission/ajouter', 'store')->name('permission.store')->middleware(['auth']);
    Route::post('/permission/desarchiver/{roleId}', 'unarchive')->name('permission.unarchive')->middleware(['auth']);
    Route::post('/permission/modifier/{permission_id}', 'update')->name('permission.update')->middleware(['auth']);
    Route::post('/permission/modifier', 'updateRolePermission')->name('permission_role.update')->middleware(['auth']);
    Route::put('/permission/archiver/{roleId}', 'archive')->name('permission.archive')->middleware(['auth']);
});
require __DIR__.'/auth.php';

//Gestion des utilisateurs
route::get('/ajouter_utilisateur', [App\Http\Controllers\User\UserController::class, 'create'])->name('add_user');
// route::post('/ajouter_utilisateur', [App\Http\Controllers\User\UserController::class, 'store'])->name('add_user');
route::get('/liste_utilisateur', [App\Http\Controllers\User\UserController::class, 'index'])->name('user_list');
route::post('/update_user/{user_id}', [App\Http\Controllers\User\UserController::class, 'update'])->name('update_user');
route::post('/delete_user/{user_id}', [App\Http\Controllers\User\UserController::class, 'destroy'])->name('delete_user');

//gestion des contacts
route::get('/ajouter_contact', [App\Http\Controllers\Contact\ContactController::class, 'create'])->name('add_contact');
// route::post('/ajouter_contact', [App\Http\Controllers\Contact\ContactController::class, 'store'])->name('add_contact');
route::get('/liste_contact', [App\Http\Controllers\Contact\ContactController::class, 'index'])->name('contact_list');
route::post('/update_contact/{contact_id}', [App\Http\Controllers\Contact\ContactController::class, 'update'])->name('update_contact');
route::post('/delete_contact/{contact_id}', [App\Http\Controllers\Contact\ContactController::class, 'destroy'])->name('delete_contact');


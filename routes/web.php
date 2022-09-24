<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
require __DIR__.'/auth.php';

//Gestion des utilisateurs
route::get('/ajouter_utilisateur', [App\Http\Controllers\User\UserController::class, 'create'])->name('add_user');
route::post('/ajouter_utilisateur', [App\Http\Controllers\User\UserController::class, 'store'])->name('add_user');
route::get('/liste_utilisateur', [App\Http\Controllers\User\UserController::class, 'index'])->name('user_list');
route::post('/update_user/{user_id}', [App\Http\Controllers\User\UserController::class, 'update'])->name('update_user');
route::post('/delete_user/{user_id}', [App\Http\Controllers\User\UserController::class, 'destroy'])->name('delete_user');

//gestion des contacts
route::get('/ajouter_contact', [App\Http\Controllers\Contact\ContactController::class, 'create'])->name('add_contact');
route::post('/ajouter_contact', [App\Http\Controllers\Contact\ContactController::class, 'store'])->name('add_contact');
route::get('/liste_contact', [App\Http\Controllers\Contact\ContactController::class, 'index'])->name('contact_list');
route::post('/update_contact/{contact_id}', [App\Http\Controllers\Contact\ContactController::class, 'update'])->name('update_contact');
route::post('/delete_contact/{contact_id}', [App\Http\Controllers\Contact\ContactController::class, 'destroy'])->name('delete_contact');


<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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

/**
 * Login routes
 */

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'exib'])->name('login');
    Route::post('/make', [LoginController::class, 'make'])->name('login.make');

});

Route::get('logout', [LoginController::class,'logout'])->name('logout');


/**
 * Contact Routes
 */
Route::get('/' , [ContactController::class,'index'])->name('contacts.index');


Route::middleware('auth')
->group(function(){


Route::get('contacts/{url}/edit' , [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('contacts/{url}/update' , [ContactController::class,'update'])->name('contacts.update');
Route::any('contacts/search' , [ContactController::class,'search'])->name('contacts.search');
Route::delete('contacts/{id}/delete' , [ContactController::class,'destroy'])->name('contacts.destroy');
Route::get('contacts/create' , [ContactController::class,'create'])->name('contacts.create');
Route::get('contacts/{url}' , [ContactController::class,'show'])->name('contacts.show');
Route::post('contacts/create' , [ContactController::class,'store'])->name('contacts.store');


});

<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('home');


Route::middleware('guest')->group(function () {

    Route::get('/login', [SessionController::class,'create'])->name('login.create');
    Route::post('/login', [SessionController::class,'store'])->name('login.store');

    Route::get('/register', [RegisterController::class,'create'])->name('register.create');
    Route::post('/register', [RegisterController::class,'store'])->name('register.store');

    Route::get('/forgot-password', [RegisterController::class,'create'])->name('register.create');
    Route::post('/forgot-password', [RegisterController::class,'store'])->name('register.store');


});

Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth')->name('login.destroy');

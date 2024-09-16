<?php

use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\ProfileController;

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


    $vacancies = Vacancy::with('user.profile')->get();
                    //  ->whereBetween('opening_time', [now()->subMonth(), now()])
                    //  ->where('status', 'open')
    return view('pages.index',compact('vacancies'));
})->name('home');


Route::middleware('guest')->group(function () {

    Route::get('/login', [SessionController::class,'create'])->name('login.create');
    Route::post('/login', [SessionController::class,'store'])->name('login.store');

    Route::get('/register', [RegisterController::class,'create'])->name('register.create');
    Route::post('/register', [RegisterController::class,'store'])->name('register.store');


    // Route::get('/forgot-password', [RegisterController::class,'create'])->name('register.create');
    // Route::post('/forgot-password', [RegisterController::class,'store'])->name('register.store');


});

Route::get('/profile', [ProfileController::class,'create'])->name('user.profile.create');
Route::post('/profile', [ProfileController::class,'store'])->name('user.profile.store');


Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth')->name('login.destroy');

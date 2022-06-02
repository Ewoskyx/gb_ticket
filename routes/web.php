<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.login');
// });

// Public Routes
Route::controller(AuthController::class)->group(function(){
    Route::get('login','login')->name('login');
    Route::post('login','userLogin')->name('login');
    Route::get('logout','logout')->name('logout');

});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('dashboard', function () {return view('welcome');
    })->name('welcome');
    
});

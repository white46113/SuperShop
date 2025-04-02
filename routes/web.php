<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\User;


Route::get('/', function () {
    return view('welcome');
});

Route::get('salman', function () {
    return 'Hello salman';
}); 

Route::get('first', [NewController::class, 'indexLatest']); 
Route::get('login', [User::class, 'login']); 
Route::post('login-form', [User::class, 'save'])->name('login-form');

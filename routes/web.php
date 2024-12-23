<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MYController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function () {
    return view('login');
});
Route::get('/register',function () {
    return view('register');
});
Route::post('/reg',[MYController::class,'registration'])->name('reg');
Route::post('/asset',[MYController::class,'registration'])->name('asset');
Route::post('/requisition',[MYController::class,'registration'])->name('requisition');
Route::get('/form_access',[MYController::class,'view']);
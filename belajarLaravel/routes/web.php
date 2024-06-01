<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AuthCOntroller;
use App\Http\Controllers\GenreController;


Route::get('/', [homeController::class,'index']);

Route::get('/register', [AuthController::class,'register']);

Route::post('/welcome', [AuthController::class,'welcome']);

Route::get('/data-table', function(){
    return view('data-table');
});

Route::get('/table', function(){
    return view('table');
});

Route::resource('genre', GenreController::class);
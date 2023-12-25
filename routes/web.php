<?php

use App\Http\Controllers\App2Contoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[App2Contoller::class,'home']);

Route::get('about',[App2Contoller::class,'about'])->name('about');

Route::get('login',[App2Contoller::class,'loginPage']);
Route::post('login-user',[App2Contoller::class,'login']);

//Article CRUD
Route::get('article',[App2Contoller::class,'index']);
Route::get('article/create',[App2Contoller::class,'create'])->name('create');
Route::delete('article/{id}',[App2Contoller::class,'delete']);



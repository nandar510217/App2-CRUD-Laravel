<?php

use App\Http\Controllers\App2Contoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[App2Contoller::class,'home']);

Route::get('about',[App2Contoller::class,'about']);

Route::get('article',[App2Contoller::class,'article']);

//Article CRUD
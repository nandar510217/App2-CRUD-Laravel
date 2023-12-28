<?php

use App\Http\Controllers\App2Contoller;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[App2Contoller::class,'home']);

Route::get('about',[App2Contoller::class,'about'])->name('about');

Route::get('login',[App2Contoller::class,'loginPage']);
Route::post('login-user',[App2Contoller::class,'login']);

//Article CRUD
//read 
Route::get('article',[App2Contoller::class,'index']);

//create
Route::get('article/create',[App2Contoller::class,'create'])->name('create');
Route::post('article',[App2Contoller::class,'store']);

//delete
Route::delete('article/{id}',[App2Contoller::class,'delete']);

Route::get('article/{id}/edit',[App2Contoller::class,'edit']);

//update
Route::put('article/{id}',[App2Contoller::class,'update']);



//Categories CRUD
//read
Route::get('categories', [CategorieController::class, 'index']);

//create
Route::get('categories/create', [CategorieController::class, 'create']);
Route::post('categories', [CategorieController::class, 'store']);

//delete
Route::delete('categories/{id}', [CategorieController::class, 'delete']);

//edit
Route::get('categories/{id}/edit', [CategorieController::class, 'edit']);

//update
Route::put('categories/{id}', [CategorieController::class, 'update']);


//Post CRUD
Route::get('posts', [App2Contoller::class, 'indexPost'])->name('index');

//create 
Route::get('posts/create', [App2Contoller::class, 'createPost'])->name('createForm');
Route::post('posts', [App2Contoller::class, 'storePost'])->name('store');

//edit 
Route::get('posts/{id}/edit', [App2Contoller::class, 'editPost'])->name('edit');

//update 
Route::put('posts/{id}', [App2Contoller::class, 'updatePost'])->name('update');

//destory 
Route::delete('posts/{id}', [App2Contoller::class, 'deletePost'])->name('delete');




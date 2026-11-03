<?php
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class,'home'] )->name('Home');
//post
Route::get('/post/create',[PostController::class,'postcreate'] )->name('postcreate');
Route::post('/post/save',[PostController::class,'postsave'] )->name('postsave');

//post_index
Route::get('/post/index',[PostController::class,'postindex'] )->name('postindex');

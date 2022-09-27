<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('create');
// });

Route::get('/',[PostController::class,'create'])->name('post#home');
Route::get('customer/create',[PostController::class,'create'])->name('post#createPage');

//form data
Route::post('post/create',[PostController::class,'postCreate'])->name('post#create');

//delete data
Route::get('post/delete/{id}',[PostController::class,'postDelete'])->name('post#delete');
// Route::delete('post/delete/{id}',[PostController::class,'postDelete'])->name('post#delete');

Route::get('post/update/{id}',[PostController::class,'updatePage'])->name('post#updatePage');

Route::get('post/edit/{id}',[PostController::class,'editPage'])->name('post#editPage');

Route::post('post/update',[PostController::class,'update'])->name('post#update');

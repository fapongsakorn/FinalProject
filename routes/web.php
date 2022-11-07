<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Login เข้าหน้า Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//หน้า Product Create
Route::get('products',[ProductController::class, 'index']);
Route::get('create-movie',[ProductController::class,'create']);
Route::post('create-movie',[ProductController::class,'store']);
Route::post('view-movie/{id}',[ProductController::class,'show']);
Route::get('edit-movie/{id}',[ProductController::class,'edit']);
Route::put('update-movie/{id}',[ProductController::class,'update']);
Route::get('delete-movie/{id}',[ProductController::class,'destroy']);
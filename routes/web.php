<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/",[App\Http\Controllers\pages\homeController::class,'home'])->name("dashboard");
Route::get("category",[App\Http\Controllers\pages\homeController::class,'category'])->name("category");
Route::get("author",[App\Http\Controllers\pages\homeController::class,'author'])->name("author");
Route::get("borrowings",[App\Http\Controllers\pages\homeController::class,'borrowings'])->name("borrowings");

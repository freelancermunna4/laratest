<?php

use app\Http\Controllers\HomeController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[siteController::class,'Home']);
Route::get('/about/{id?}',[siteController::class,'About']);
Route::get('/contact/{id?}',[siteController::class,'Contact']);

// Route::get('users',usersController::class);
Route::get('student',studentController::class);
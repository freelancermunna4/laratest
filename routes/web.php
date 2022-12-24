<?php

use app\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home' , 'HomeController@home');
Route::get('/about' , 'HomeController@about');
Route::get('/contact' , 'HomeController@contact');

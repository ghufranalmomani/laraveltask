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

Route::get('/user',function(){
    return 'orange';
});


Route::get('/candy', function () {
    return view('candy');
});

Route::get('/aboutus', function () {
    return view('aboutuS');
});

Route::get('/contactus', function () {
    return view('contactus');
});
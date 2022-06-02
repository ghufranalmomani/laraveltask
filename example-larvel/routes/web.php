<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstCont;
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

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('index/id/{id}/name/{name}', [FirstCont::class, 'check'] )->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



// Route::get('/about', function () {
//      $Team = array ( array( "Name"=>"Ibrahim","Age"=>"24" ),array("Name"=>"Samar","Age"=>"24" ),array("Name"=>"Ghufran","Age"=>"24" ));

//     return View::make('aboutus')->with('Team', $Team);

// });
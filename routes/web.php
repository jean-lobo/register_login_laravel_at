<?php

use App\Http\Controllers\RegistrationController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
}); */

/* Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy'); */
Route::group(['middleware'=>"web"],function(){

    Route::get('/','App\Http\Controllers\RegistrationController@index');
    Route::view('register','register');
    Route::post('register','App\Http\Controllers\RegistrationController@register');
    Route::view('login','login');
    Route::post('login','App\Http\Controllers\RegistrationController@login');
    Route::view('home','home');
   // Route::get('/','App\Http\Controllers\RegistrationController@shi');
});

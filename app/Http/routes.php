<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//OFFICE

Route::get('office/dashboard', function () {
    return view('office-dashboard');
});

Route::get('office/users', function () {
    return view('office-users');
});

Route::get('office/api', function () {
    return view('office-api');
});



//API

Route::get('api/users', 'ApiController@getAllUsers');
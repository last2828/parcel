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

Route::get('/verified', function () {
    return view('auth.verified');
});

Route::get('/step/1', function () {
    return view('step.1');
});

Route::get('/step/2', function () {
    return view('step.2');
});

Route::get('/step/3', function () {
    return view('step.3');
});

Route::post('/step/{id}', 'FormController@store')->name('send');





Route::get('/step/{id}', 'FormController@create')->name('step');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

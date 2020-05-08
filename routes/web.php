<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/step/{id}', 'FormController@index')->name('form')->where('id', '[1-6]');
Route::post('/step/{id}', 'FormController@store')->name('send')->where('id', '[1-6]');


Auth::routes(['verify' => true]);



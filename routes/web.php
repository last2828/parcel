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
    return redirect()->route('login');
});



Route::get('/step', 'FormController@index')->name('step')->middleware(['user', 'verified']);
Route::post('/step/{id}', 'FormController@store')->name('send')->where('id', '[1-6]')->middleware(['user', 'verified']);
Route::get('/go-live', 'FormController@endStep')->name('go-live')->middleware(['user', 'verified']);

Route::get('/admin', 'AdminController@index')->name('admin-index')->middleware(['admin', 'verified',]);
Route::put('/admin/update/{id}', 'AdminController@update')->name('admin-update')->middleware(['admin', 'verified']);

Auth::routes(['verify' => true]);

Route::get('/verified', function () {
    return view('auth.verified');
})->name('verified');





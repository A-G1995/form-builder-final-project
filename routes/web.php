<?php

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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $user = Auth::user();
    return view('home', compact('user'));
});

Route::get('/create-form', 'FormController@index');
Route::get('/forms/{id}', 'FormController@show');
// Route::get('/forms/{id}', 'FormController@showResponse');



Route::get('/about', function () {
    $user = Auth::user();
    return view('about', compact('user'));
});

Route::get('/logout', function () {
    Auth::logout();
    return view('home');
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/post',function(){
    return view('show');
});

Route::get('/post/create','PostController@create');
Route::post('/post','PostController@store');
Route::get('/post','PostController@index');
Route::get('/post/{id}','PostController@show');
Route::get('/post/{id}/edit','PostController@edit');
Route::put('/post/{id}','PostController@update');
Route::delete('/post/{id}','PostController@destroy');
Auth::routes();

// Route::resource('/post','PostController');

Route::get('/home', 'HomeController@index')->name('home');

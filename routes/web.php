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

Route::post('/message', 'MessagesController@send');
Route::post('/message/{id}', 'MessagesController@delete')->middleware('auth');

Route::get('/message', 'MessagesController@index');
Route::get('/message/read', 'MessagesController@read');
Route::get('/potato', function () {
    return view('potato');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
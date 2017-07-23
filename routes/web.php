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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-job', function () {
    return view('add-job');
})->middleware('promoter')->name('add-job');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

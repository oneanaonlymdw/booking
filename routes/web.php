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

Route::get('/admin', 'AdminLoginController@index');
Route::post('/adminlogin', 'AdminLoginController@login');
Route::get('/admindashboard', 'AdminController@index');
Route::get('/test', 'AdminController@card');
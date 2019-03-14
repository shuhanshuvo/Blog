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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/Alumni_login', 'HomeController@Alumni_login');
Route::get('/Profile_info', 'HomeController@Profile_info');
Route::get('/Alumni_profile', 'HomeController@Alumni_profile');

//Admin
Route::get('/admin', 'AdminController@Admin_login');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::post('/adminlogin', 'AdminController@login_dashboard');
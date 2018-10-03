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

Route::get('/admin','AdminController@dashboard');
Route::get('/admin/setup/sss','AdminController@setup_sss');
Route::get('/admin/setup/bir','AdminController@setup_bir');
Route::get('/admin/setup/philhealth','AdminController@setup_philhealth');
Route::get('/admin/setup/pagibig','AdminController@setup_pagibig');


Route::auth();

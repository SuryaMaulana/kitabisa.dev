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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/donasi', 'PagesController@donasi');
Route::get('/zakat', 'PagesController@zakat');

Route::resource('donasi', 'PostsController');

Route::get('/donasi/{url}', 'PostsController@donasiShow');
Route::get('/login', 'PagesController@login');

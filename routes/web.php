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

//Home

Route::get('/', 'HomeController@index')->name('home');
Route::get('/lang/{locale}', 'HomeController@lang');

//Admin

Route::get('/admin','AdminController@login');
Route::post('/admins','AdminController@adminlogin')->name('adminlogin');
Route::get('/logout','AdminController@logout');


//Wallpapers

Route::get('/wallpaper/create', 'WallpapersController@create')->name('wallpapers.create');
Route::post('/wallpaper/create', 'WallpapersController@store')->name('wallpapers.store');
Route::get('/wallpaper/all', 'WallpapersController@all')->name('wallpapers.all');
Route::get('/wallpaper/delete/{id}', 'WallpapersController@destroy')->name('wallpapers.delete');
Route::get('/wallpaper/edit/{id}', 'WallpapersController@edit')->name('wallpapers.edit');
Route::post('/wallpaper/update/{id}', 'WallpapersController@update')->name('wallpapers.update');

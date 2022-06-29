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

Auth::routes();

Route::get('/', 'RecipesController@index')->name('home');
Route::get('/create', 'RecipesController@create')->name('create');
Route::post('/create/post', 'RecipesController@store')->name('post_recipes');
Route::get('/{slug}', 'RecipesController@show')->name('detail');

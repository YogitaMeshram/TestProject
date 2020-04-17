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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', 'HomeController@index');

Route::get('/blog', 'HomeController@showblog');
Route::get('/addblog', 'HomeController@addblog');
Route::post('addblog', 'HomeController@store');
Route::get('/showblog', 'HomeController@showListing');
Route::get('/editblog/{id}', 'HomeController@editblog');
Route::post('editblog/{id}', 'HomeController@update');

Route::get('deleteblog/{id}', 'HomeController@delete');
// Route::delete('deleteblog/{id}', 'HomeController@delete')->name('blog-delete');

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');


Route::get('/login', 'LoginController@create');
Route::post('login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');
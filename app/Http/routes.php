<?php

/*
|--------------------------------------------------------------------------
| Application Routes Awesome
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Model\Blog;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', 'AuthController@home');
Route::get('home', 'AuthController@home');
Route::get('aboutus', 'AuthController@aboutus');
Route::get('contactus', 'AuthController@contactus');
Route::get('blogs/{id}','BlogController@view');


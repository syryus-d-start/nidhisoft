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

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [
	"uses" => "ajgroups/Http/Controllers/ContactController@contact_get",
	'as' => 'contact.get'
]);

Route::post('/contact', [
	"uses" => 'ajgroups/Http/Controllers/ContactController@contact_post',
	'as' => 'contact.post'
]);
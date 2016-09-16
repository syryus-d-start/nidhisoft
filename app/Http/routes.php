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

// Routes should be simple as they can, in initial phases just use controller, then use middleware too.
// Now on 'GET: /contact' request, it will be taken to authcontroller's contactus() method.
// In your case, it can be ContactController@contactUs
// Keep method's name in camel cases and variable's name in snake case.
Route::get('contact', 'AuthController@contactus');


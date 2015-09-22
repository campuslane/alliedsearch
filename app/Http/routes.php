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

get('new', function() {
	return view('pages.new');
});

get('/', function () {
    return view('pages.home');
});

get('candidate', function() {
	return view('pages.candidate');
});

// get('resume', function() {
// 	return view('pages.resume');
// });

get('client', function() {
	return view('pages.client');
});

get('contact', function() {
	return view('pages.contact');
});

Route::controller('form', 'FormController');

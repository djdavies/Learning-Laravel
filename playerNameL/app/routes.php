<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$thing = "LAZORZ";
	$otherThing = "TYRANOSAURUS REX";

	return View::make('hello', [
		'thing' => $thing,
		'otherThing' => $otherThing	
		]);
});

Route::get('/twitbay', [
	'as' => 'index',
	'uses' => 'PostController@index'
]);

Route::get('/twitbay/createPost', [
	'as' => 'createPost',
	'uses' => 'PostController@create'
]);

Route::get('/twitbay/post/{id}',
	[
	'as' => 'getPost',
	'uses' => 'PostController@show'
	]
);


Route::get('/dan', function() {
	return 'hi dan';
});

Route::get('/showParam/{value}', function($value) {
	return 'the param was: ' . $value;
});

// multi/*/something/*
Route::get('multi/{value1}/something/{value2}', function ($v1, $v2) {
	echo 'values: ' . $v1 . ', ' . $v2;
}); 

/*
Route::get('players', function () {
	// show all postings in DB
	return Players::all();
});
*/

Route::get('posting/{id}', function ($id) {
	// return specific posting
	
	if ($post = Posting::all()) {
		"Found an object...";
		var_dump($post->posting);
	}
	else {
		return 'not found!';
	}

});


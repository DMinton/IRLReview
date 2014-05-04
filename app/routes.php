<?php

/*
*	Home routes
*/
Route::get(    '/',            'HomeController@index');
Route::get(    '/about',       'HomeController@about');

/*
*	Replay routes
*/


/*
*	User routes
*/

Route::get(    '/signup', 	  'UserController@create');
Route::post(   '/signup', 	  'UserController@store');
Route::get(    '/home',         'UserController@show');

/*
*	Session routes
*/

Route::get(    '/login',        'SessionController@create');
Route::get(    '/logout', 	  'SessionController@destroy');
Route::post(   '/login', 	   'SessionController@store');


/*
*	Video routes
*/

Route::get(    '/video', 	    'VideoController@index');
Route::get(    '/video/{video}', 'VideoController@show');

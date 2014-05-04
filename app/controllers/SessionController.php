<?php

use Helpers\AuthHelper as AuthHelper;

class SessionController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.login');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$credentials = Input::all();
		$validator = Validator::make($credentials, User::$rules);

		if (AuthHelper::loginUser($credentials))
		{
		    return Redirect::action('HomeController@index');
		}

		$message = "Invalid email or password.";
		return Redirect::action('SessionController@create')->withErrors($message);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		if(Auth::check())
		{
			Auth::logout();
		}
		return Redirect::action('HomeController@index');
	}

}
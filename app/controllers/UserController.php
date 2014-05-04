<?php

use Controllers\Interfaces\UserModelInterface as UserModel;
use Helpers\AuthHelper as AuthHelper;

class UserController extends \BaseController {

	public function __construct(UserModel $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.signup');
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

		if($validator->fails())
		{
			return Redirect::action('UserController@create')->withErrors($validator);
		}

		$newUser = $this->user->createUser($credentials);
		if(AuthHelper::loginUser($credentials))
		{
			return Redirect::action('HomeController@index');
		}

		return Redirect::action('UserController@create')->withErrors($e);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

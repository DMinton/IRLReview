<?php

class HomeController extends \BaseController {

	/**
	 * Home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('home.index');
	}

	/**
	 * About page.
	 *
	 * @return Response
	 */
	public function about()
	{
		return View::make('home.about');
	}

}
<?php namespace Helpers;

use Auth;

class AuthHelper {

	public static function loginUser($userData)
	{
		$credentials = array(
				'email' 	   => $userData['email'],
				'password' 	=> $userData['password']
			);

		return Auth::attempt($credentials, true);
	}

}

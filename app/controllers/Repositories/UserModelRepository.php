<?php namespace Controllers\Repositories;

use User, Hash;

class UserModelRepository implements \Controllers\Interfaces\UserModelInterface
{

	public function createUser($userData) {
		$user = new User();

		$user->name 		= $userData['name'];
		$user->username 	= $userData['username'];
		$user->email		= $userData['email'];
		$user->password 	= Hash::make($userData['password']);

		return $user->save();
	}
}
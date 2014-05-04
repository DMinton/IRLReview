<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $table = 'users';
	protected $fillable = array('name', 'username', 'email');
	protected $hidden = array('password');
	public static $rules = array(
								'name'					=> 'required|min:2',
								'email'					=> 'required|email|unique:users',
								'username'				=> 'required|min:2',
								'password'				=> 'required|alpha_num|between:6,12|confirmed',
								'password_confirmation'	=> 'required|alpha_num|between:6,12',
							);

	public function replay() {
		return $this->hasMany('Replay', 'user_id');
	}

	public function video() {
		return $this->hasMany('Video', 'user_id');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

}

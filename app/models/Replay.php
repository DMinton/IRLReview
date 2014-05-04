<?php

class Replay extends \Eloquent {
	protected $table = 'replays';
    protected $fillable = array('name');

    public function video() {
		return $this->hasMany('Replay', 'replay_id');
	}

	public function replay() {
		return $this->belongsTo('User');
	}

	public function create(User $user , $replay) {
		return $user->replay()->save($replay);
	}

	public function setCreateReplay($name, $description, $filetype) {
		return new Replay(array(
					'name' 			=> $name,
					'description' 	=> $description,
					'filetype' 		=> $filetype
				));
	}
}
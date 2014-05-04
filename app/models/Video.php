<?php

class Video extends \Eloquent {
	protected $table = 'videos';
    protected $fillable = array('name');

    public function user() {
		return $this->belongsTo('User');
	}

	public function replay() {
		return $this->belongsTo('Replay');
	}

	public function createVideo(User $user, Replay $replay, $video) {
		$replay->associate($video);
		return $user->video()->save($video);
	}

	public function setCreateVideo($name, $filetype) {
		return new Video(array(
				'name' 		=> $name,
				'filetype' 	=> $filetype
			));
	}
}

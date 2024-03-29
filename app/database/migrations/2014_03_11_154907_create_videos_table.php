<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('videos', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name");
    		$table->string("filetype");

    		$table->integer('user_id')->unsigned();
    		$table->integer('replay_id')->unsigned();

			$table->timestamps();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('videos');
	}

}

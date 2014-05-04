<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('replays', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name");
    		$table->string("description");
    		$table->string("filetype");

    		$table->integer('user_id')->unsigned();
    		
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
	    Schema::drop('replays');
	}

}

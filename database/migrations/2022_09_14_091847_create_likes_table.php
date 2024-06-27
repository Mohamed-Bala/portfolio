<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLikesTable extends Migration {

	public function up()
	{
		Schema::create('likes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('Type');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			
		});
	}

	public function down()
	{
		Schema::drop('likes');
	}
}
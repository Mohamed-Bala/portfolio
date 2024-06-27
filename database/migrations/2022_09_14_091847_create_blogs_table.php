<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration {

	public function up()
	{
		Schema::create('blogs', function(Blueprint $table) {
            $table->id();
			$table->timestamps();
			$table->string('title', 255);
			$table->string('body', 8000);
			$table->string('author', 255);
			$table->string('image', 255);

		});
	}

	public function down()
	{
		Schema::drop('blogs');
	}
}
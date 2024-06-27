<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('subject', 255);
			$table->text('message');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');

		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}
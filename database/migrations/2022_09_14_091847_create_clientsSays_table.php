<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsSaysTable extends Migration {

	public function up()
	{
		Schema::create('clientsSays', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('profession', 255);
			$table->text('opinion');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');

		});
	}

	public function down()
	{
		Schema::drop('clientSays');
	}
}
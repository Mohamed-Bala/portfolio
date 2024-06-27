<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('comment');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
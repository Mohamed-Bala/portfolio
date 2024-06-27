<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortfoliosTable extends Migration {

	public function up()
	{
		Schema::create('portfolios', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->text('picture');
		});
	}

	public function down()
	{
		Schema::drop('portfolios');
	}
}
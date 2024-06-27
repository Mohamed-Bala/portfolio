<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisitsTable extends Migration {

	public function up()
	{
		Schema::create('visits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('visit');
			
		});
	}

	public function down()
	{
		Schema::drop('visits');
	}
}
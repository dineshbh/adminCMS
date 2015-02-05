<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuemsomosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quemsomos', function(Blueprint $table)
		{
			$table->text('historia');
			$table->text('missao');
			$table->text('valores');
			$table->text('principios');
			$table->text('visao');
		});		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quemsomos');		//
	}

}
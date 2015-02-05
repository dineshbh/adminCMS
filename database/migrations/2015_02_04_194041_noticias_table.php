<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo', 100);
			$table->text('texto');
			$table->string('imagem', 255);
			$table->timestamps();
		});		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('noticias');		//
	}

}

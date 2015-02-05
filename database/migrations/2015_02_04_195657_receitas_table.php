<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReceitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receitas', function(Blueprint $table)
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
		Schema::drop('receitas');		//
	}

}

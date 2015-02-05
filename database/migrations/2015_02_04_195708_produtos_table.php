<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 100);
			$table->text('descricao');
			$table->text('infnutricional');
			$table->text('ingredientes');
			$table->text('conservacao');
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
		Schema::drop('produtos');		//
	}

}

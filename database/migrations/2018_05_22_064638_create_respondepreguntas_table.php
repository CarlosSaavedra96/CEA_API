<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespondepreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respondepreguntas', function(Blueprint $table)
		{
			$table->string('idrespondepreguntas', 100);
			$table->string('posiblesrespuestas_idposiblesrespuestas', 100)->index('fk_respondepreguntas_posiblesrespuestas1_idx');
			$table->string('preguntas_idpreguntas', 100)->index('fk_respondepreguntas_preguntas1_idx');
			$table->string('atletasprogramadosparaexamen_idatletasprogramadosparaexamen', 100)->index('fk_respondepreguntas_atletasprogramadosparaexamen1_idx');
			$table->primary(['idrespondepreguntas','preguntas_idpreguntas']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('respondepreguntas');
	}

}

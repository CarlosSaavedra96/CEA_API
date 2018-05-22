<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas', function(Blueprint $table)
		{
			$table->string('idpreguntas', 100)->primary();
			$table->integer('numPregunta')->nullable();
			$table->string('descripcion', 400)->nullable();
			$table->string('escala_idescala', 100)->index('fk_preguntas_escala1_idx');
			$table->string('cuestionario_idcuestionario', 100)->index('fk_preguntas_cuestionario1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('preguntas');
	}

}

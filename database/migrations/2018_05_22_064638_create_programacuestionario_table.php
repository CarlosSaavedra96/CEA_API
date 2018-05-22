<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramacuestionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programacuestionario', function(Blueprint $table)
		{
			$table->string('idprogramacuestionario', 100);
			$table->dateTime('fechaprogramadaInicio')->nullable();
			$table->dateTime('fechaprogramadaFinal')->nullable();
			$table->integer('psicologo_persona_idpersona')->index('fk_programacuestionario_psicologo1_idx');
			$table->string('cuestionario_idcuestionario', 100)->index('fk_programacuestionario_cuestionario1_idx');
			$table->primary(['idprogramacuestionario','cuestionario_idcuestionario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programacuestionario');
	}

}

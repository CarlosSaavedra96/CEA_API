<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramasdelentrenadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programasdelentrenador', function(Blueprint $table)
		{
			$table->integer('idprogramasdelentrenador');
			$table->dateTime('fechaCreacion');
			$table->string('nombrePrograma', 100);
			$table->integer('entrenador_persona_idpersona')->index('fk_programasdelentrenador_entrenador1_idx');
			$table->primary(['idprogramasdelentrenador','entrenador_persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programasdelentrenador');
	}

}

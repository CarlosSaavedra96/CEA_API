<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplinaHasEntrenadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disciplina_has_entrenador', function(Blueprint $table)
		{
			$table->integer('disciplina_iddisciplina')->index('fk_disciplina_has_entrenador_disciplina1_idx');
			$table->integer('entrenador_persona_idpersona')->index('fk_disciplina_has_entrenador_entrenador1_idx');
			$table->date('entrenaDesde')->nullable();
			$table->primary(['disciplina_iddisciplina','entrenador_persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disciplina_has_entrenador');
	}

}

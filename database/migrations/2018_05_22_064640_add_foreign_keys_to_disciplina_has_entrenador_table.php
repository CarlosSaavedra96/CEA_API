<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDisciplinaHasEntrenadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disciplina_has_entrenador', function(Blueprint $table)
		{
			$table->foreign('disciplina_iddisciplina', 'fk_disciplina_has_entrenador_disciplina1')->references('iddisciplina')->on('disciplina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('entrenador_persona_idpersona', 'fk_disciplina_has_entrenador_entrenador1')->references('persona_idpersona')->on('entrenador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disciplina_has_entrenador', function(Blueprint $table)
		{
			$table->dropForeign('fk_disciplina_has_entrenador_disciplina1');
			$table->dropForeign('fk_disciplina_has_entrenador_entrenador1');
		});
	}

}

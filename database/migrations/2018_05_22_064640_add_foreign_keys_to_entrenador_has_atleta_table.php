<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntrenadorHasAtletaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('entrenador_has_atleta', function(Blueprint $table)
		{
			$table->foreign('atleta_persona_idpersona', 'fk_entrenador_has_atleta_atleta1')->references('idpersona')->on('atleta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('entrenador_persona_idpersona', 'fk_entrenador_has_atleta_entrenador')->references('persona_idpersona')->on('entrenador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('entrenador_has_atleta', function(Blueprint $table)
		{
			$table->dropForeign('fk_entrenador_has_atleta_atleta1');
			$table->dropForeign('fk_entrenador_has_atleta_entrenador');
		});
	}

}

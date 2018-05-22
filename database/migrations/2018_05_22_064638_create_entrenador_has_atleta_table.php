<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntrenadorHasAtletaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrenador_has_atleta', function(Blueprint $table)
		{
			$table->integer('entrenador_persona_idpersona')->index('fk_entrenador_has_atleta_entrenador1_idx');
			$table->integer('atleta_persona_idpersona')->index('fk_entrenador_has_atleta_atleta1_idx');
			$table->date('fechaEntrenamiento')->nullable();
			$table->boolean('status')->nullable();
			$table->primary(['entrenador_persona_idpersona','atleta_persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entrenador_has_atleta');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProgramasdelentrenadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('programasdelentrenador', function(Blueprint $table)
		{
			$table->foreign('entrenador_persona_idpersona', 'fk_programasdelentrenador_entrenador1')->references('persona_idpersona')->on('entrenador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('programasdelentrenador', function(Blueprint $table)
		{
			$table->dropForeign('fk_programasdelentrenador_entrenador1');
		});
	}

}

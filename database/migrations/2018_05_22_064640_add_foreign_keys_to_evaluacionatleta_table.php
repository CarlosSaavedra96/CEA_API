<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEvaluacionatletaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evaluacionatleta', function(Blueprint $table)
		{
			$table->foreign('entrenador_persona_idpersona', 'fk_evaluacionatleta_entrenador1')->references('persona_idpersona')->on('entrenador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('periodo_idperiodo', 'fk_evaluacionatleta_periodo1')->references('idperiodo')->on('periodo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evaluacionatleta', function(Blueprint $table)
		{
			$table->dropForeign('fk_evaluacionatleta_entrenador1');
			$table->dropForeign('fk_evaluacionatleta_periodo1');
		});
	}

}

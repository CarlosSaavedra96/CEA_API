<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProgramacuestionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('programacuestionario', function(Blueprint $table)
		{
			$table->foreign('cuestionario_idcuestionario', 'fk_programacuestionario_cuestionario1')->references('idcuestionario')->on('cuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('psicologo_persona_idpersona', 'fk_programacuestionario_psicologo1')->references('persona_idpersona')->on('psicologo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('programacuestionario', function(Blueprint $table)
		{
			$table->dropForeign('fk_programacuestionario_cuestionario1');
			$table->dropForeign('fk_programacuestionario_psicologo1');
		});
	}

}

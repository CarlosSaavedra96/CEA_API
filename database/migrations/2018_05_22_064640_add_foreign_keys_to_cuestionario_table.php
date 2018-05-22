<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCuestionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cuestionario', function(Blueprint $table)
		{
			$table->foreign('psicologo_persona_idpersona', 'fk_cuestionario_psicologo1')->references('persona_idpersona')->on('psicologo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipocuestionario_idtipocuestionario', 'fk_cuestionario_tipocuestionario1')->references('idtipocuestionario')->on('tipocuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cuestionario', function(Blueprint $table)
		{
			$table->dropForeign('fk_cuestionario_psicologo1');
			$table->dropForeign('fk_cuestionario_tipocuestionario1');
		});
	}

}

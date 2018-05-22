<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConsultamedicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('consultamedica', function(Blueprint $table)
		{
			$table->foreign('citamedica_idcitamedica', 'fk_chequeomedico_citamedica1')->references('idcitamedica')->on('citamedica')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('medico_persona_idpersona', 'fk_chequeomedico_medico1')->references('persona_idpersona')->on('medico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('consultamedica', function(Blueprint $table)
		{
			$table->dropForeign('fk_chequeomedico_citamedica1');
			$table->dropForeign('fk_chequeomedico_medico1');
		});
	}

}

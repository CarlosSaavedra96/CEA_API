<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCitamedicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('citamedica', function(Blueprint $table)
		{
			$table->foreign('atleta_persona_idpersona', 'fk_citamedica_atleta')->references('idpersona')->on('atleta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('citamedica', function(Blueprint $table)
		{
			$table->dropForeign('fk_citamedica_atleta');
		});
	}

}

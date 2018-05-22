<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCitanutriologoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('citanutriologo', function(Blueprint $table)
		{
			$table->foreign('atleta_persona_idpersona', 'fk_citanutriologo_atleta1')->references('idpersona')->on('atleta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('entrenador_persona_idpersona', 'fk_citanutriologo_entrenador1')->references('persona_idpersona')->on('entrenador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('citanutriologo', function(Blueprint $table)
		{
			$table->dropForeign('fk_citanutriologo_atleta1');
			$table->dropForeign('fk_citanutriologo_entrenador1');
		});
	}

}

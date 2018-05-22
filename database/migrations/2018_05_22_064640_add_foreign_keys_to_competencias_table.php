<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompetenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('competencias', function(Blueprint $table)
		{
			$table->foreign('atleta_idpersona', 'fk_competencias_atleta1')->references('idpersona')->on('atleta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('competencias', function(Blueprint $table)
		{
			$table->dropForeign('fk_competencias_atleta1');
		});
	}

}

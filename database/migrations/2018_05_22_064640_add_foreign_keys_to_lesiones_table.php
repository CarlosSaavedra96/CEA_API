<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLesionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lesiones', function(Blueprint $table)
		{
			$table->foreign('consultamedica_idconsultamedica', 'fk_lesiones_consultamedica1')->references('idconsultamedica')->on('consultamedica')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lesiones', function(Blueprint $table)
		{
			$table->dropForeign('fk_lesiones_consultamedica1');
		});
	}

}

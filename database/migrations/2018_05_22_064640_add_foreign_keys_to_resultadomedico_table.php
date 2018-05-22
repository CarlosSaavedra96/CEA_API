<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResultadomedicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resultadomedico', function(Blueprint $table)
		{
			$table->foreign('consultamedica_idconsultamedica', 'fk_resultadomedico_consultamedica1')->references('idconsultamedica')->on('consultamedica')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resultadomedico', function(Blueprint $table)
		{
			$table->dropForeign('fk_resultadomedico_consultamedica1');
		});
	}

}

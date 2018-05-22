<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilaxisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profilaxis', function(Blueprint $table)
		{
			$table->integer('idprofilaxis')->primary();
			$table->dateTime('fechacreacion')->nullable();
			$table->integer('fisiologo_persona_idpersona')->index('fk_profilaxis_fisiologo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profilaxis');
	}

}

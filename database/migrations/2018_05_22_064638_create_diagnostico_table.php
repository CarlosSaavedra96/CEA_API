<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosticoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diagnostico', function(Blueprint $table)
		{
			$table->integer('iddiagnostico');
			$table->string('subjetivo', 300)->nullable();
			$table->string('objetivo', 300)->nullable();
			$table->string('pronostico', 300)->nullable();
			$table->string('nota', 300)->nullable();
			$table->integer('escaladolor_idescaladolor')->index('fk_diagnostico_escaladolor1_idx');
			$table->primary(['iddiagnostico','escaladolor_idescaladolor']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diagnostico');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultadooficialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resultadooficial', function(Blueprint $table)
		{
			$table->integer('idcompetencias');
			$table->integer('competencias_idcompetencias')->index('fk_resultadooficial_competencias1_idx');
			$table->primary(['idcompetencias','competencias_idcompetencias']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resultadooficial');
	}

}

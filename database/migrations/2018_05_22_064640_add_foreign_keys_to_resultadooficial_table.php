<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResultadooficialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resultadooficial', function(Blueprint $table)
		{
			$table->foreign('competencias_idcompetencias', 'fk_resultadooficial_competencias1')->references('idcompetencias')->on('competencias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resultadooficial', function(Blueprint $table)
		{
			$table->dropForeign('fk_resultadooficial_competencias1');
		});
	}

}

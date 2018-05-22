<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAntecedentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antecedentes', function(Blueprint $table)
		{
			$table->integer('idantecedentes');
			$table->integer('antecedentesfamiliares_idantecedentesfamiliares')->index('fk_antecedentes_antecedentesfamiliares1_idx');
			$table->integer('antecedentespersonales_idantecedentespersonales')->index('fk_antecedentes_antecedentespersonales1_idx');
			$table->primary(['idantecedentes','antecedentesfamiliares_idantecedentesfamiliares','antecedentespersonales_idantecedentespersonales']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('antecedentes');
	}

}

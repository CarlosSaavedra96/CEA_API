<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('competencias', function(Blueprint $table)
		{
			$table->integer('idcompetencias', true);
			$table->integer('atleta_idpersona')->index('fk_competencias_atleta1_idx');
			$table->string('nombreCompetencia', 55)->nullable();
			$table->string('lugarCompetencia', 50)->nullable();
			$table->date('fechaCompetencia')->nullable();
			$table->string('resultadocompetencia', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('competencias');
	}

}

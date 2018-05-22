<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistorialclinicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historialclinico', function(Blueprint $table)
		{
			$table->integer('idhistorialclinico')->primary();
			$table->integer('antecedentes_idantecedentes')->index('fk_historialclinico_antecedentes1_idx');
			$table->integer('resultadomedico_idresultadomedico')->index('fk_historialclinico_resultadomedico1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historialclinico');
	}

}

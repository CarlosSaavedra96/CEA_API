<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultadomedicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resultadomedico', function(Blueprint $table)
		{
			$table->integer('idresultadomedico');
			$table->string('notaMedica', 400);
			$table->string('medicamento', 400);
			$table->string('acudir', 50)->nullable();
			$table->integer('consultamedica_idconsultamedica')->index('fk_resultadomedico_consultamedica1_idx');
			$table->primary(['idresultadomedico','consultamedica_idconsultamedica']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resultadomedico');
	}

}

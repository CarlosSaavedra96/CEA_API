<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultamedicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consultamedica', function(Blueprint $table)
		{
			$table->integer('idconsultamedica');
			$table->dateTime('fechaConsulta');
			$table->string('motivoConsulta', 150)->nullable();
			$table->string('sintomas', 200)->nullable();
			$table->string('dolor', 100)->nullable();
			$table->string('observacionesMedicas', 500)->nullable();
			$table->float('estatura', 10, 0)->nullable();
			$table->string('presion', 100)->nullable();
			$table->integer('medico_persona_idpersona')->index('fk_chequeomedico_medico1_idx');
			$table->integer('citamedica_idcitamedica')->index('fk_chequeomedico_citamedica1_idx');
			$table->primary(['idconsultamedica','medico_persona_idpersona','citamedica_idcitamedica']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consultamedica');
	}

}

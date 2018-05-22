<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLesionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesiones', function(Blueprint $table)
		{
			$table->integer('idlesiones');
			$table->integer('IDx')->nullable();
			$table->string('area', 45)->nullable();
			$table->string('tipolesion', 45)->nullable();
			$table->string('estructura', 60)->nullable();
			$table->string('lado', 45)->nullable();
			$table->integer('consultamedica_idconsultamedica')->index('fk_lesiones_consultamedica1_idx');
			$table->primary(['idlesiones','consultamedica_idconsultamedica']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lesiones');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitamedicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citamedica', function(Blueprint $table)
		{
			$table->integer('idcitamedica', true);
			$table->string('horarioCita', 20)->nullable();
			$table->date('fechaCita')->nullable();
			$table->string('asuntoCita', 300)->nullable();
			$table->integer('atleta_persona_idpersona')->index('fk_citamedica_atleta1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('citamedica');
	}

}

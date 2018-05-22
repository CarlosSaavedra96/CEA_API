<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTerapiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terapia', function(Blueprint $table)
		{
			$table->integer('idterapia');
			$table->string('nombreTerapia', 45)->nullable();
			$table->string('modo', 45)->nullable();
			$table->string('tiempo', 45)->nullable();
			$table->string('dias', 50)->nullable();
			$table->integer('numeroSesiones')->nullable();
			$table->date('fecha2daEvaluacion')->nullable();
			$table->integer('tratamiento_idtratamiento')->index('fk_terapia_tratamiento1_idx');
			$table->primary(['idterapia','tratamiento_idtratamiento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terapia');
	}

}

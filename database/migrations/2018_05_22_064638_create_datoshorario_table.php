<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatoshorarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datoshorario', function(Blueprint $table)
		{
			$table->integer('iddatoshorario');
			$table->integer('horario_idhorario')->index('fk_datoshorario_horario1_idx');
			$table->string('dia', 45);
			$table->string('horaEntrada', 10);
			$table->string('horaSalida', 10);
			$table->primary(['iddatoshorario','horario_idhorario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datoshorario');
	}

}

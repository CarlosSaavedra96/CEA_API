<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horario', function(Blueprint $table)
		{
			$table->integer('idhorario')->primary();
			$table->string('totalHoras', 45)->nullable();
			$table->integer('periodo_idperiodo')->index('fk_horario_periodo1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('horario');
	}

}

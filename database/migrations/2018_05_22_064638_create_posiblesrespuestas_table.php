<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosiblesrespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posiblesrespuestas', function(Blueprint $table)
		{
			$table->string('idposiblesrespuestas', 100);
			$table->string('descripcion', 300);
			$table->float('valor', 10, 0);
			$table->string('cuestionario_idcuestionario', 100)->index('fk_posiblesrespuestas_cuestionario1_idx');
			$table->primary(['idposiblesrespuestas','cuestionario_idcuestionario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posiblesrespuestas');
	}

}

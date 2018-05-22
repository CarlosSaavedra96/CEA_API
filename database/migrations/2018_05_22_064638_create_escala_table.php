<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscalaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escala', function(Blueprint $table)
		{
			$table->string('idescala', 100);
			$table->string('descripcion', 200)->nullable();
			$table->float('minimo', 10, 0)->nullable();
			$table->float('maximo', 10, 0)->nullable();
			$table->string('cuestionario_idcuestionario', 100)->index('fk_escala_cuestionario1_idx');
			$table->primary(['idescala','cuestionario_idcuestionario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('escala');
	}

}

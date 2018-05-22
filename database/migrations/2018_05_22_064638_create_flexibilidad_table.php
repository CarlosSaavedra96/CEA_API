<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlexibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flexibilidad', function(Blueprint $table)
		{
			$table->integer('idflexibilidad');
			$table->string('realizo', 100);
			$table->date('fecha');
			$table->integer('ejerciciosflexibilidad_idejerciciosflexibilidad')->index('fk_flexibilidad_ejerciciosflexibilidad1_idx');
			$table->primary(['idflexibilidad','ejerciciosflexibilidad_idejerciciosflexibilidad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flexibilidad');
	}

}

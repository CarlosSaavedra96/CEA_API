<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEjerciciosflexibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ejerciciosflexibilidad', function(Blueprint $table)
		{
			$table->integer('idejerciciosflexibilidad', true);
			$table->float('wells(pie)', 10, 0);
			$table->float('extdetroncohaciaAtras', 10, 0);
			$table->float('signosChober', 10, 0);
			$table->float('flexionAdelante', 10, 0);
			$table->float('flexionProfunda', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ejerciciosflexibilidad');
	}

}

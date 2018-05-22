<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alimentos', function(Blueprint $table)
		{
			$table->integer('idfrecuenciaalimentos');
			$table->string('alimento', 200);
			$table->string('cantidad', 50);
			$table->integer('frecuenciaalimentos_idfrecuencia')->index('fk_alimentos_frecuenciaalimentos1_idx');
			$table->primary(['idfrecuenciaalimentos','frecuenciaalimentos_idfrecuencia']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alimentos');
	}

}

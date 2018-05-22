<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTratamientoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tratamiento', function(Blueprint $table)
		{
			$table->integer('idtratamiento');
			$table->string('nombreTratamiento', 80)->nullable();
			$table->string('nota', 300)->nullable();
			$table->integer('lesiones_idlesiones')->index('fk_tratamiento_lesiones1_idx');
			$table->primary(['idtratamiento','lesiones_idlesiones']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tratamiento');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAntecedentesfamiliaresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antecedentesfamiliares', function(Blueprint $table)
		{
			$table->integer('idantecedentesfamiliares')->primary();
			$table->string('enfermedades', 300)->nullable();
			$table->string('nota', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('antecedentesfamiliares');
	}

}

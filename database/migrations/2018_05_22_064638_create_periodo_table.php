<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeriodoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodo', function(Blueprint $table)
		{
			$table->integer('idperiodo')->primary();
			$table->string('descripcion', 45)->nullable();
			$table->date('fechaInicio');
			$table->date('fechaFinal');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('periodo');
	}

}

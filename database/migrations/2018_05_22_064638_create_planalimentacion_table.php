<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanalimentacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planalimentacion', function(Blueprint $table)
		{
			$table->integer('idplanalimentacion')->primary();
			$table->string('nota', 200)->nullable();
			$table->integer('recordatorio_idrecordatorio')->index('fk_planalimentacion_recordatorio1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planalimentacion');
	}

}

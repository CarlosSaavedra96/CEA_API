<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car', function(Blueprint $table)
		{
			$table->integer('idcar', true);
			$table->string('nombrecar', 200)->nullable();
			$table->string('ubicacion', 150)->nullable();
			$table->string('tipoCar', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('car');
	}

}

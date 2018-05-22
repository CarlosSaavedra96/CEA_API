<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscaladolorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escaladolor', function(Blueprint $table)
		{
			$table->integer('idescaladolor')->primary();
			$table->string('estadoDolor', 45);
			$table->string('nota', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('escaladolor');
	}

}

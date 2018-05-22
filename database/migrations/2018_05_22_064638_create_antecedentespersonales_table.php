<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAntecedentespersonalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antecedentespersonales', function(Blueprint $table)
		{
			$table->integer('idantecedentespersonales')->primary();
			$table->string('enfermedades', 300)->nullable();
			$table->string('alergias', 300)->nullable();
			$table->string('intolerancias', 300)->nullable();
			$table->string('fracturas', 200)->nullable();
			$table->string('vacunas', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('antecedentespersonales');
	}

}

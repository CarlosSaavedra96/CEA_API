<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMunicipioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municipio', function(Blueprint $table)
		{
			$table->integer('idmunicipio', true);
			$table->string('municipio', 80)->nullable();
			$table->integer('estado_idestado')->index('fk_ciudad_estado1_idx');
			$table->primary(['idmunicipio','estado_idestado']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('municipio');
	}

}

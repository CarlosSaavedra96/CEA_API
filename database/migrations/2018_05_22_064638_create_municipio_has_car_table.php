<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMunicipioHasCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municipio_has_car', function(Blueprint $table)
		{
			$table->integer('municipio_idmunicipio')->index('fk_municipio_has_car_municipio1_idx');
			$table->integer('car_idcar')->index('fk_municipio_has_car_car1_idx');
			$table->primary(['municipio_idmunicipio','car_idcar']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('municipio_has_car');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMunicipioHasCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('municipio_has_car', function(Blueprint $table)
		{
			$table->foreign('car_idcar', 'fk_municipio_has_car_car1')->references('idcar')->on('car')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('municipio_idmunicipio', 'fk_municipio_has_car_municipio1')->references('idmunicipio')->on('municipio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('municipio_has_car', function(Blueprint $table)
		{
			$table->dropForeign('fk_municipio_has_car_car1');
			$table->dropForeign('fk_municipio_has_car_municipio1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMunicipioHasPersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municipio_has_persona', function(Blueprint $table)
		{
			$table->integer('municipio_idmunicipio')->index('fk_municipio_has_persona_municipio1_idx');
			$table->integer('persona_idpersona')->index('fk_municipio_has_persona_persona1_idx');
			$table->primary(['municipio_idmunicipio','persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('municipio_has_persona');
	}

}

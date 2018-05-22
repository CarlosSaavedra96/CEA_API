<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMunicipioHasPersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('municipio_has_persona', function(Blueprint $table)
		{
			$table->foreign('municipio_idmunicipio', 'fk_municipio_has_persona_municipio1')->references('idmunicipio')->on('municipio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persona_idpersona', 'fk_municipio_has_persona_persona1')->references('idpersona')->on('persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('municipio_has_persona', function(Blueprint $table)
		{
			$table->dropForeign('fk_municipio_has_persona_municipio1');
			$table->dropForeign('fk_municipio_has_persona_persona1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persona', function(Blueprint $table)
		{
			$table->foreign('login_idlogin', 'fk_persona_login1')->references('idlogin')->on('login')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('municipio_idmunicipio', 'fk_persona_municipio1')->references('idmunicipio')->on('municipio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('perfil_idperfil', 'fk_persona_perfil1')->references('idperfil')->on('perfil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('persona', function(Blueprint $table)
		{
			$table->dropForeign('fk_persona_login1');
			$table->dropForeign('fk_persona_municipio1');
			$table->dropForeign('fk_persona_perfil1');
		});
	}

}

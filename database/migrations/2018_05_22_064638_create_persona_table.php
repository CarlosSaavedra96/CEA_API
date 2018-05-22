<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persona', function(Blueprint $table)
		{
			$table->integer('idpersona', true);
			$table->integer('login_idlogin')->index('fk_persona_login1_idx');
			$table->integer('perfil_idperfil')->index('fk_persona_perfil1_idx');
			$table->string('nombrecompleto', 150)->nullable();
			$table->integer('edad')->nullable();
			$table->string('genero', 45)->nullable();
			$table->string('curp', 150)->nullable();
			$table->string('rfc', 100)->nullable();
			$table->date('fechaNacimiento')->nullable();
			$table->string('estadoCivil', 45)->nullable();
			$table->string('ciudadNacimiento', 60)->nullable();
			$table->string('direccion', 250)->nullable();
			$table->integer('municipio_idmunicipio')->index('fk_persona_municipio1_idx');
			$table->primary(['idpersona','perfil_idperfil','municipio_idmunicipio','login_idlogin']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('persona');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitanutriologoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citanutriologo', function(Blueprint $table)
		{
			$table->integer('idcitanutriologo')->primary();
			$table->date('fechaCita');
			$table->string('horario', 45)->nullable();
			$table->string('asunto', 200)->nullable();
			$table->integer('atleta_persona_idpersona');
			$table->integer('atleta_persona_genero_idgenero');
			$table->integer('entrenador_persona_idpersona')->index('fk_citanutriologo_entrenador1_idx');
			$table->index(['atleta_persona_idpersona','atleta_persona_genero_idgenero'], 'fk_citanutriologo_atleta1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('citanutriologo');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTutorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutor', function(Blueprint $table)
		{
			$table->integer('idtutor', true);
			$table->string('nombre', 150);
			$table->string('genero', 45)->nullable();
			$table->string('parentesco', 60)->nullable();
			$table->integer('numero celular')->nullable();
			$table->integer('numero casa')->nullable();
			$table->integer('atleta_persona_idpersona')->index('fk_tutor_atleta1_idx');
			$table->primary(['idtutor','atleta_persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tutor');
	}

}

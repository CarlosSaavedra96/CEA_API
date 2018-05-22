<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuestionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuestionario', function(Blueprint $table)
		{
			$table->string('idcuestionario', 100);
			$table->date('fechaCreacion')->nullable();
			$table->string('tipocuestionario_idtipocuestionario', 100)->index('fk_cuestionario_tipocuestionario1_idx');
			$table->integer('psicologo_persona_idpersona')->index('fk_cuestionario_psicologo1_idx');
			$table->primary(['idcuestionario','tipocuestionario_idtipocuestionario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cuestionario');
	}

}

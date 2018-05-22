<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtletasprogramadosparaexamenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atletasprogramadosparaexamen', function(Blueprint $table)
		{
			$table->string('idatletasprogramadosparaexamen', 100);
			$table->date('fechaPresentado');
			$table->string('programacuestionario_idprogramacuestionario', 100)->index('fk_atletasprogramadosparaexamen_programacuestionario1_idx');
			$table->integer('atleta_persona_idpersona');
			$table->string('cuestionario_idcuestionario', 100)->index('fk_atletasprogramadosparaexamen_cuestionario1_idx');
			$table->primary(['idatletasprogramadosparaexamen','atleta_persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atletasprogramadosparaexamen');
	}

}

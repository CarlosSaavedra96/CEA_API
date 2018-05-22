<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluacionatletaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluacionatleta', function(Blueprint $table)
		{
			$table->integer('idevaluacionatleta');
			$table->string('nombreEvaluacion', 100);
			$table->dateTime('fechaEvaluacion');
			$table->string('resultado', 100);
			$table->string('notas', 300)->nullable();
			$table->integer('entrenador_persona_idpersona')->index('fk_evaluacionatleta_entrenador1_idx');
			$table->integer('periodo_idperiodo')->index('fk_evaluacionatleta_periodo1_idx');
			$table->primary(['idevaluacionatleta','periodo_idperiodo']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evaluacionatleta');
	}

}

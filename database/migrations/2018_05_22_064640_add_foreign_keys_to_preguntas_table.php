<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('preguntas', function(Blueprint $table)
		{
			$table->foreign('cuestionario_idcuestionario', 'fk_preguntas_cuestionario1')->references('idcuestionario')->on('cuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('escala_idescala', 'fk_preguntas_escala1')->references('idescala')->on('escala')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('preguntas', function(Blueprint $table)
		{
			$table->dropForeign('fk_preguntas_cuestionario1');
			$table->dropForeign('fk_preguntas_escala1');
		});
	}

}

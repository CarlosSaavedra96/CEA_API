<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRespondepreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('respondepreguntas', function(Blueprint $table)
		{
			$table->foreign('atletasprogramadosparaexamen_idatletasprogramadosparaexamen', 'fk_respondepreguntas_atletasprogramadosparaexamen1')->references('idatletasprogramadosparaexamen')->on('atletasprogramadosparaexamen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('posiblesrespuestas_idposiblesrespuestas', 'fk_respondepreguntas_posiblesrespuestas1')->references('idposiblesrespuestas')->on('posiblesrespuestas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('preguntas_idpreguntas', 'fk_respondepreguntas_preguntas1')->references('idpreguntas')->on('preguntas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('respondepreguntas', function(Blueprint $table)
		{
			$table->dropForeign('fk_respondepreguntas_atletasprogramadosparaexamen1');
			$table->dropForeign('fk_respondepreguntas_posiblesrespuestas1');
			$table->dropForeign('fk_respondepreguntas_preguntas1');
		});
	}

}

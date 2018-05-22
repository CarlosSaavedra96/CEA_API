<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAtletasprogramadosparaexamenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('atletasprogramadosparaexamen', function(Blueprint $table)
		{
			$table->foreign('cuestionario_idcuestionario', 'fk_atletasprogramadosparaexamen_cuestionario1')->references('idcuestionario')->on('cuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('programacuestionario_idprogramacuestionario', 'fk_atletasprogramadosparaexamen_programacuestionario1')->references('idprogramacuestionario')->on('programacuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('atletasprogramadosparaexamen', function(Blueprint $table)
		{
			$table->dropForeign('fk_atletasprogramadosparaexamen_cuestionario1');
			$table->dropForeign('fk_atletasprogramadosparaexamen_programacuestionario1');
		});
	}

}

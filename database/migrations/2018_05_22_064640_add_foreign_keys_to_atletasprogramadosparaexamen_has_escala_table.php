<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAtletasprogramadosparaexamenHasEscalaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('atletasprogramadosparaexamen_has_escala', function(Blueprint $table)
		{
			$table->foreign('atletasprogramadosparaexamen_idatletasprogramadosparaexamen', 'fk_atletasprogramadosparaexamen_has_escala_atletasprogramados1')->references('idatletasprogramadosparaexamen')->on('atletasprogramadosparaexamen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('escala_idescala', 'fk_atletasprogramadosparaexamen_has_escala_escala1')->references('idescala')->on('escala')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('atletasprogramadosparaexamen_has_escala', function(Blueprint $table)
		{
			$table->dropForeign('fk_atletasprogramadosparaexamen_has_escala_atletasprogramados1');
			$table->dropForeign('fk_atletasprogramadosparaexamen_has_escala_escala1');
		});
	}

}

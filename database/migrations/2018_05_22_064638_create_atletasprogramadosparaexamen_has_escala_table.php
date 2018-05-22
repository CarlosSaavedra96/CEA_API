<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtletasprogramadosparaexamenHasEscalaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atletasprogramadosparaexamen_has_escala', function(Blueprint $table)
		{
			$table->string('atletasprogramadosparaexamen_idatletasprogramadosparaexamen', 100)->index('fk_atletasprogramadosparaexamen_has_escala_atletasprogramad_idx');
			$table->string('escala_idescala', 100)->index('fk_atletasprogramadosparaexamen_has_escala_escala1_idx');
			$table->float('total', 10, 0)->nullable();
			$table->primary(['atletasprogramadosparaexamen_idatletasprogramadosparaexamen','escala_idescala']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atletasprogramadosparaexamen_has_escala');
	}

}

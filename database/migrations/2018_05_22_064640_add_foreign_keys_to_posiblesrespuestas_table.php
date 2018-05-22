<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPosiblesrespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posiblesrespuestas', function(Blueprint $table)
		{
			$table->foreign('cuestionario_idcuestionario', 'fk_posiblesrespuestas_cuestionario1')->references('idcuestionario')->on('cuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posiblesrespuestas', function(Blueprint $table)
		{
			$table->dropForeign('fk_posiblesrespuestas_cuestionario1');
		});
	}

}

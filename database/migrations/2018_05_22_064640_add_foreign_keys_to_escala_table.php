<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEscalaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('escala', function(Blueprint $table)
		{
			$table->foreign('cuestionario_idcuestionario', 'fk_escala_cuestionario1')->references('idcuestionario')->on('cuestionario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('escala', function(Blueprint $table)
		{
			$table->dropForeign('fk_escala_cuestionario1');
		});
	}

}

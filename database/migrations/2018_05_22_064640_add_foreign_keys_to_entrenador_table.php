<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntrenadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('entrenador', function(Blueprint $table)
		{
			$table->foreign('car_idcar', 'fk_entrenador_car1')->references('idcar')->on('car')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persona_idpersona', 'fk_entrenador_persona1')->references('idpersona')->on('persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('entrenador', function(Blueprint $table)
		{
			$table->dropForeign('fk_entrenador_car1');
			$table->dropForeign('fk_entrenador_persona1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDatoshorarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('datoshorario', function(Blueprint $table)
		{
			$table->foreign('horario_idhorario', 'fk_datoshorario_horario1')->references('idhorario')->on('horario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('datoshorario', function(Blueprint $table)
		{
			$table->dropForeign('fk_datoshorario_horario1');
		});
	}

}

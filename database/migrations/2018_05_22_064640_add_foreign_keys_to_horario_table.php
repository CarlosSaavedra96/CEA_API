<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHorarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('horario', function(Blueprint $table)
		{
			$table->foreign('periodo_idperiodo', 'fk_horario_periodo1')->references('idperiodo')->on('periodo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('horario', function(Blueprint $table)
		{
			$table->dropForeign('fk_horario_periodo1');
		});
	}

}

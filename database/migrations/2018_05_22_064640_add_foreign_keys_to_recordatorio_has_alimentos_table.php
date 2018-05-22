<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecordatorioHasAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recordatorio_has_alimentos', function(Blueprint $table)
		{
			$table->foreign('alimentos_idfrecuenciaalimentos', 'fk_recordatorio_has_alimentos_alimentos1')->references('idfrecuenciaalimentos')->on('alimentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('recordatorio_idrecordatorio', 'fk_recordatorio_has_alimentos_recordatorio1')->references('idrecordatorio')->on('recordatorio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recordatorio_has_alimentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_recordatorio_has_alimentos_alimentos1');
			$table->dropForeign('fk_recordatorio_has_alimentos_recordatorio1');
		});
	}

}

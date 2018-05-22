<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordatorioHasAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recordatorio_has_alimentos', function(Blueprint $table)
		{
			$table->integer('recordatorio_idrecordatorio')->index('fk_recordatorio_has_alimentos_recordatorio1_idx');
			$table->integer('alimentos_idfrecuenciaalimentos')->index('fk_recordatorio_has_alimentos_alimentos1_idx');
			$table->primary(['recordatorio_idrecordatorio','alimentos_idfrecuenciaalimentos']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recordatorio_has_alimentos');
	}

}

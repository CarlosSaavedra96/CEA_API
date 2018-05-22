<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanalimentacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('planalimentacion', function(Blueprint $table)
		{
			$table->foreign('recordatorio_idrecordatorio', 'fk_planalimentacion_recordatorio1')->references('idrecordatorio')->on('recordatorio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('planalimentacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_planalimentacion_recordatorio1');
		});
	}

}

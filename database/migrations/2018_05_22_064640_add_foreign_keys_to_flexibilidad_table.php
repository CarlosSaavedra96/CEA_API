<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFlexibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('flexibilidad', function(Blueprint $table)
		{
			$table->foreign('ejerciciosflexibilidad_idejerciciosflexibilidad', 'fk_flexibilidad_ejerciciosflexibilidad1')->references('idejerciciosflexibilidad')->on('ejerciciosflexibilidad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('flexibilidad', function(Blueprint $table)
		{
			$table->dropForeign('fk_flexibilidad_ejerciciosflexibilidad1');
		});
	}

}

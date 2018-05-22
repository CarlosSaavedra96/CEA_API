<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alimentos', function(Blueprint $table)
		{
			$table->foreign('frecuenciaalimentos_idfrecuencia', 'fk_alimentos_frecuenciaalimentos1')->references('idfrecuencia')->on('frecuenciaalimentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alimentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_alimentos_frecuenciaalimentos1');
		});
	}

}

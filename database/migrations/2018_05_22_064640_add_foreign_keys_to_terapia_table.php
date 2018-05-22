<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTerapiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('terapia', function(Blueprint $table)
		{
			$table->foreign('tratamiento_idtratamiento', 'fk_terapia_tratamiento1')->references('idtratamiento')->on('tratamiento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('terapia', function(Blueprint $table)
		{
			$table->dropForeign('fk_terapia_tratamiento1');
		});
	}

}

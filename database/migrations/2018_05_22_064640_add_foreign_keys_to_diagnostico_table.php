<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiagnosticoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diagnostico', function(Blueprint $table)
		{
			$table->foreign('escaladolor_idescaladolor', 'fk_diagnostico_escaladolor1')->references('idescaladolor')->on('escaladolor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('diagnostico', function(Blueprint $table)
		{
			$table->dropForeign('fk_diagnostico_escaladolor1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArchivosprogramaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('archivosprograma', function(Blueprint $table)
		{
			$table->foreign('programasdelentrenador_idprogramasdelentrenador', 'fk_archivosprograma_programasdelentrenador1')->references('idprogramasdelentrenador')->on('programasdelentrenador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('archivosprograma', function(Blueprint $table)
		{
			$table->dropForeign('fk_archivosprograma_programasdelentrenador1');
		});
	}

}

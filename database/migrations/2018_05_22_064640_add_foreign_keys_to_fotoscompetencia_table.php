<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFotoscompetenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fotoscompetencia', function(Blueprint $table)
		{
			$table->foreign('competencias_idcompetencias', 'fk_fotoscompetencia_competencias1')->references('idcompetencias')->on('competencias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fotoscompetencia', function(Blueprint $table)
		{
			$table->dropForeign('fk_fotoscompetencia_competencias1');
		});
	}

}

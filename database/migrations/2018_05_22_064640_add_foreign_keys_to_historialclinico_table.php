<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHistorialclinicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('historialclinico', function(Blueprint $table)
		{
			$table->foreign('antecedentes_idantecedentes', 'fk_historialclinico_antecedentes1')->references('idantecedentes')->on('antecedentes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('resultadomedico_idresultadomedico', 'fk_historialclinico_resultadomedico1')->references('idresultadomedico')->on('resultadomedico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('historialclinico', function(Blueprint $table)
		{
			$table->dropForeign('fk_historialclinico_antecedentes1');
			$table->dropForeign('fk_historialclinico_resultadomedico1');
		});
	}

}

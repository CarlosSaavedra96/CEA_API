<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAntecedentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('antecedentes', function(Blueprint $table)
		{
			$table->foreign('antecedentesfamiliares_idantecedentesfamiliares', 'fk_antecedentes_antecedentesfamiliares1')->references('idantecedentesfamiliares')->on('antecedentesfamiliares')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('antecedentespersonales_idantecedentespersonales', 'fk_antecedentes_antecedentespersonales1')->references('idantecedentespersonales')->on('antecedentespersonales')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('antecedentes', function(Blueprint $table)
		{
			$table->dropForeign('fk_antecedentes_antecedentesfamiliares1');
			$table->dropForeign('fk_antecedentes_antecedentespersonales1');
		});
	}

}

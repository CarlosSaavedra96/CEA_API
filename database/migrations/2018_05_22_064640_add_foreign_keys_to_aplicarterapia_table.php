<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAplicarterapiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aplicarterapia', function(Blueprint $table)
		{
			$table->foreign('Asistenciatleta_idAsistenciatleta', 'fk_aplicarterapia_Asistenciatleta1')->references('idAsistenciatleta')->on('Asistenciatleta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('diagnostico_iddiagnostico', 'fk_aplicarterapia_diagnostico1')->references('iddiagnostico')->on('diagnostico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fisiologo_persona_idpersona', 'fk_aplicarterapia_fisiologo1')->references('persona_idpersona')->on('fisiologo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aplicarterapia', function(Blueprint $table)
		{
			$table->dropForeign('fk_aplicarterapia_Asistenciatleta1');
			$table->dropForeign('fk_aplicarterapia_diagnostico1');
			$table->dropForeign('fk_aplicarterapia_fisiologo1');
		});
	}

}

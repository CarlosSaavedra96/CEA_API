<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAplicarterapiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aplicarterapia', function(Blueprint $table)
		{
			$table->integer('idaplicarterapia');
			$table->dateTime('fecha')->nullable();
			$table->integer('Asistenciatleta_idAsistenciatleta')->index('fk_aplicarterapia_Asistenciatleta1_idx');
			$table->integer('diagnostico_iddiagnostico')->index('fk_aplicarterapia_diagnostico1_idx');
			$table->integer('fisiologo_persona_idpersona')->index('fk_aplicarterapia_fisiologo1_idx');
			$table->primary(['idaplicarterapia','Asistenciatleta_idAsistenciatleta','diagnostico_iddiagnostico','fisiologo_persona_idpersona']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aplicarterapia');
	}

}

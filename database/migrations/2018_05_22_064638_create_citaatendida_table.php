<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitaatendidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citaatendida', function(Blueprint $table)
		{
			$table->integer('idcitaatendida');
			$table->dateTime('fecha')->nullable();
			$table->integer('citanutriologo_idcitanutriologo')->index('fk_citaatendida_citanutriologo1_idx');
			$table->integer('asistenciacita_idasistenciacita')->index('fk_citaatendida_asistenciacita1_idx');
			$table->integer('nutriologo_persona_idpersona')->index('fk_citaatendida_nutriologo1_idx');
			$table->primary(['idcitaatendida','citanutriologo_idcitanutriologo','asistenciacita_idasistenciacita']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('citaatendida');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCitaatendidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('citaatendida', function(Blueprint $table)
		{
			$table->foreign('asistenciacita_idasistenciacita', 'fk_citaatendida_asistenciacita1')->references('idasistenciacita')->on('asistenciacita')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('citanutriologo_idcitanutriologo', 'fk_citaatendida_citanutriologo1')->references('idcitanutriologo')->on('citanutriologo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('nutriologo_persona_idpersona', 'fk_citaatendida_nutriologo1')->references('persona_idpersona')->on('nutriologo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('citaatendida', function(Blueprint $table)
		{
			$table->dropForeign('fk_citaatendida_asistenciacita1');
			$table->dropForeign('fk_citaatendida_citanutriologo1');
			$table->dropForeign('fk_citaatendida_nutriologo1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAtletaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('atleta', function(Blueprint $table)
		{
			$table->foreign('car_idcar', 'fk_atleta_car1')->references('idcar')->on('car')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('disciplina_iddisciplina', 'fk_atleta_disciplina1')->references('iddisciplina')->on('disciplina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('idpersona', 'fk_atleta_persona1')->references('idpersona')->on('persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('atleta', function(Blueprint $table)
		{
			$table->dropForeign('fk_atleta_car1');
			$table->dropForeign('fk_atleta_disciplina1');
			$table->dropForeign('fk_atleta_persona1');
		});
	}

}

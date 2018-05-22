<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDisciplinaHasCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disciplina_has_car', function(Blueprint $table)
		{
			$table->foreign('car_idcar', 'fk_disciplina_has_car_car1')->references('idcar')->on('car')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('disciplina_iddisciplina', 'fk_disciplina_has_car_disciplina1')->references('iddisciplina')->on('disciplina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disciplina_has_car', function(Blueprint $table)
		{
			$table->dropForeign('fk_disciplina_has_car_car1');
			$table->dropForeign('fk_disciplina_has_car_disciplina1');
		});
	}

}

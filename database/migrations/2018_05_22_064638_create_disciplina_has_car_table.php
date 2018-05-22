<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplinaHasCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disciplina_has_car', function(Blueprint $table)
		{
			$table->integer('disciplina_iddisciplina')->index('fk_disciplina_has_car_disciplina1_idx');
			$table->integer('car_idcar')->index('fk_disciplina_has_car_car1_idx');
			$table->primary(['disciplina_iddisciplina','car_idcar']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disciplina_has_car');
	}

}

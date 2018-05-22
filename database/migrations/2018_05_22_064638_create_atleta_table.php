<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtletaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atleta', function(Blueprint $table)
		{
			$table->integer('idpersona', true);
			$table->integer('disciplina_iddisciplina')->index('fk_atleta_disciplina1_idx');
			$table->integer('car_idcar')->index('fk_atleta_car1_idx');
			$table->date('fechaIngreso')->nullable();
			$table->enum('estadoMedico', array('activo','inactivo'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atleta');
	}

}

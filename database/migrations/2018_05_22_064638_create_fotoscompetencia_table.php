<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFotoscompetenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fotoscompetencia', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('competencias_idcompetencias')->index('fk_fotoscompetencia_competencias1_idx');
			$table->primary(['id','competencias_idcompetencias']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fotoscompetencia');
	}

}

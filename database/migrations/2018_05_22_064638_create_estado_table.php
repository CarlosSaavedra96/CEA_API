<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estado', function(Blueprint $table)
		{
			$table->integer('idestado', true);
			$table->string('estado', 100)->nullable();
			$table->integer('pais_idpais')->index('fk_estado_pais1_idx');
			$table->primary(['idestado','pais_idpais']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estado');
	}

}

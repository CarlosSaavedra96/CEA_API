<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArchivosprogramaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archivosprograma', function(Blueprint $table)
		{
			$table->integer('idarchivosprograma');
			$table->string('tituloArchivo', 45);
			$table->string('tamano', 300);
			$table->string('tipoArchivo', 45);
			$table->string('nombreArchivo', 45);
			$table->dateTime('fecha');
			$table->string('descripcion', 60);
			$table->integer('programasdelentrenador_idprogramasdelentrenador')->index('fk_archivosprograma_programasdelentrenador1_idx');
			$table->primary(['idarchivosprograma','programasdelentrenador_idprogramasdelentrenador']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('archivosprograma');
	}

}

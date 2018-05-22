<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFisiologoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fisiologo', function(Blueprint $table)
		{
			$table->foreign('persona_idpersona', 'fk_fisiologo_persona1')->references('idpersona')->on('persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fisiologo', function(Blueprint $table)
		{
			$table->dropForeign('fk_fisiologo_persona1');
		});
	}

}

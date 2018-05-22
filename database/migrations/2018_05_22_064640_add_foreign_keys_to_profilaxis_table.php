<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfilaxisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profilaxis', function(Blueprint $table)
		{
			$table->foreign('fisiologo_persona_idpersona', 'fk_profilaxis_fisiologo1')->references('persona_idpersona')->on('fisiologo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profilaxis', function(Blueprint $table)
		{
			$table->dropForeign('fk_profilaxis_fisiologo1');
		});
	}

}

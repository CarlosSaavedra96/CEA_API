<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTutorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tutor', function(Blueprint $table)
		{
			$table->foreign('atleta_persona_idpersona', 'fk_tutor_atleta1')->references('idpersona')->on('atleta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tutor', function(Blueprint $table)
		{
			$table->dropForeign('fk_tutor_atleta1');
		});
	}

}

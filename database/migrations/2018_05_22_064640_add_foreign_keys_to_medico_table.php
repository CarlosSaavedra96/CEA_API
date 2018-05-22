<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMedicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('medico', function(Blueprint $table)
		{
			$table->foreign('persona_idpersona', 'fk_medico_persona1')->references('idpersona')->on('persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('medico', function(Blueprint $table)
		{
			$table->dropForeign('fk_medico_persona1');
		});
	}

}

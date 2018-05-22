<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNutriologoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nutriologo', function(Blueprint $table)
		{
			$table->foreign('persona_idpersona', 'fk_nutriologo_persona1')->references('idpersona')->on('persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nutriologo', function(Blueprint $table)
		{
			$table->dropForeign('fk_nutriologo_persona1');
		});
	}

}

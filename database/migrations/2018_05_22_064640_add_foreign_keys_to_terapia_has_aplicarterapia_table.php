<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTerapiaHasAplicarterapiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('terapia_has_aplicarterapia', function(Blueprint $table)
		{
			$table->foreign('aplicarterapia_idaplicarterapia', 'fk_terapia_has_aplicarterapia_aplicarterapia1')->references('idaplicarterapia')->on('aplicarterapia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('terapia_idterapia', 'fk_terapia_has_aplicarterapia_terapia1')->references('idterapia')->on('terapia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('terapia_has_aplicarterapia', function(Blueprint $table)
		{
			$table->dropForeign('fk_terapia_has_aplicarterapia_aplicarterapia1');
			$table->dropForeign('fk_terapia_has_aplicarterapia_terapia1');
		});
	}

}

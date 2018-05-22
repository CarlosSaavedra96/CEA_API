<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTerapiaHasAplicarterapiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terapia_has_aplicarterapia', function(Blueprint $table)
		{
			$table->integer('terapia_idterapia')->index('fk_terapia_has_aplicarterapia_terapia1_idx');
			$table->integer('aplicarterapia_idaplicarterapia')->index('fk_terapia_has_aplicarterapia_aplicarterapia1_idx');
			$table->primary(['terapia_idterapia','aplicarterapia_idaplicarterapia']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terapia_has_aplicarterapia');
	}

}

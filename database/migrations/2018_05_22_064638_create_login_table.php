<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('login', function(Blueprint $table)
		{
			$table->integer('idlogin', true);
			$table->string('user', 60)->nullable()->unique('user_UNIQUE');
			$table->string('password', 60)->nullable();
			$table->string('email', 200)->nullable()->unique('email_UNIQUE');
			$table->enum('rango', array('superadmin','admin','superusuario','usuario'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('login');
	}

}

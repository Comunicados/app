<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchoolStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('school_staff', function(Blueprint $table)
		{
			$table->foreign('suplente_de', 'persona_suplente')->references('dni')->on('school_staff')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('dni', 'staff_users')->references('dni')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('school_staff', function(Blueprint $table)
		{
			$table->dropForeign('persona_suplente');
			$table->dropForeign('staff_users');
		});
	}

}

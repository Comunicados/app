<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->foreign('turno_id', 'courses_schedules')->references('id')->on('schedules')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->dropForeign('courses_schedules');
		});
	}

}

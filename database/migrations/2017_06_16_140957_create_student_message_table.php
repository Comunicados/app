<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_message', function(Blueprint $table)
		{
			$table->integer('alumno_id');
			$table->integer('mensaje_id')->index('mensaje_id');
			$table->primary(['alumno_id','mensaje_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_message');
	}

}

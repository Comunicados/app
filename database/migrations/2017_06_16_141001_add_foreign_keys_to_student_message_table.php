<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_message', function(Blueprint $table)
		{
			$table->foreign('mensaje_id', 'student_message_ibfk_1')->references('id')->on('messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alumno_id', 'student_message_students')->references('dni')->on('students')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_message', function(Blueprint $table)
		{
			$table->dropForeign('student_message_ibfk_1');
			$table->dropForeign('student_message_students');
		});
	}

}

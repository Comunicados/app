<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			$table->foreign('padre_envia', 'messages_sent')->references('dni')->on('parents')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('personal_colegio_envia', 'messages_staff')->references('dni')->on('school_staff')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('mensaje_tipo_id', 'messages_type')->references('id')->on('messages_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			$table->dropForeign('messages_sent');
			$table->dropForeign('messages_staff');
			$table->dropForeign('messages_type');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParentMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parent_message', function(Blueprint $table)
		{
			$table->foreign('padre_id', 'parent_message_ibfk_1')->references('dni')->on('parents')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('mensaje_id', 'parent_message_ibfk_2')->references('id')->on('messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parent_message', function(Blueprint $table)
		{
			$table->dropForeign('parent_message_ibfk_1');
			$table->dropForeign('parent_message_ibfk_2');
		});
	}

}

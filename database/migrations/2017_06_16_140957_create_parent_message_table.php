<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parent_message', function(Blueprint $table)
		{
			$table->integer('padre_id');
			$table->integer('mensaje_id')->index('mensaje_id');
			$table->boolean('fue_visto?');
			$table->boolean('firmado?');
			$table->primary(['padre_id','mensaje_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parent_message');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_permission', function(Blueprint $table)
		{
			$table->integer('id_rol');
			$table->integer('id_permiso')->index('id_permiso');
			$table->integer('id_school')->index('id_school');
			$table->boolean('consultar');
			$table->boolean('agregar');
			$table->boolean('editar');
			$table->boolean('eliminar');
			$table->primary(['id_rol','id_permiso']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_permission');
	}

}

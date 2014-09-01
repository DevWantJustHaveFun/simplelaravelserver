<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('motos', function(Blueprint $table)
	  {
		  $table->increments('id');
		  $table->string('m_name');
		  $table->string('m_marque');
		  $table->string('m_img');
		  $table->timestamps();
	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('motos');
	}

}

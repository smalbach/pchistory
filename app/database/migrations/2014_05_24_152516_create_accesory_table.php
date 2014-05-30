<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('accesories', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("description");
            $table->string("capacity");
            $table->string("photo")->nullable();
            $table->string("unity");
            $table->string("state");
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
        Schema::drop('accesories');
	}

}

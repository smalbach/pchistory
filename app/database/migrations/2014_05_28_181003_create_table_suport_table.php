<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){

        Schema::create('suports', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->integer('company_id')->unsigned();
            $table->string("direction");
            $table->string("phone");
            $table->string("cell");
            $table->string("email");
            $table->string("contact");
            $table->string("state");
            $table->string("slug");
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
        Schema::drop('suports');
	}

}

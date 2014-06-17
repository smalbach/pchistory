<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePchistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('pchistories', function(Blueprint $table) {
            $table->integer('pc_id')->unsigned();

            $table->integer('company_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('trademark_id')->unsigned();
            $table->integer('so_id')->unsigned();

            $table->enum("type",['Support', 'Assistance']);
            $table->string("name");
            $table->string("internal_id")->nullable();
            $table->string("location")->nullable();
            $table->string("owner")->nullable();
            $table->string("model");
            $table->string("serial")->nullable();
            $table->string("voltage")->nullable();
            $table->date("maintenance_day");
            $table->date("buy_date");
            $table->string("password")->nullable();
            $table->text("observation")->nullable();
            $table->string("photo")->nullable();
            $table->string("state");
            $table->integer("order");
            $table->text("motive");
            $table->enum("type_pc",['desktop', 'all in one', 'laptop']);



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
		//
	}

}

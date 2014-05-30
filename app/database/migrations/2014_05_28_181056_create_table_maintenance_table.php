<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMaintenanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('maintenances', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('pc_id')->unsigned();
            $table->integer('support_id')->unsigned();
            $table->string("issues");
            $table->enum("priority",['high', 'medium','low']);
            $table->string("observation");
            $table->enum("state",['waiting', 'fix','processing']);
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

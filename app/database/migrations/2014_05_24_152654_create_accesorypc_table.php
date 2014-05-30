<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesorypcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        /*Schema::create('accesory_pcs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('accesory_id')->unsigned();

            $table->integer('pc_id')->unsigned();

            $table->string("value");
            $table->text("description")->nullable();
            $table->string("state");
            $table->string("serial")->nullable();
            $table->timestamps();
        });

       /* Schema::table('accesoriesxpc', function($table) {
            $table->string("id_accesory")>references('id')->on('accesories');
            $table->string("id_pc")>references('id')->on('pcs');;
        });*/

    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('accesoriesxpc');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('pcs', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('company_id')->unsigned();
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


           /* $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign("trademark_id")->references('id')->on('trademarks');
            $table->foreign("so_id")->references('id')->on('so');*/


            $table->timestamps();
        });

        Schema::table('pcs', function(Blueprint $table) {
            $table->enum("type_pc",['desktop', 'all in one', 'laptop']);

        });



       /* Schema::table('pcs', function(Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign("trademark_id")->references('id')->on('trademarks');
            $table->foreign("so_id")->references('id')->on('so');
        });*/

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('pcs');
	}

}

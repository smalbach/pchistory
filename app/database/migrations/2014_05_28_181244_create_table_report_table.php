<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('reports', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('maintenance_id')->unsigned();
            $table->text('find');
            $table->text("tecnical_report");
            $table->text("recommendations")->nullable();
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
		//
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('companies', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("company_id");
            $table->string("direction");
            $table->string("phone");
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
        Schema::drop('companies');
	}

}

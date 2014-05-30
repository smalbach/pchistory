<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('AccesoryTableSeeder');
        //$this->call('CategoryTableSeeder');
        //$this->call('CompanyTableSeeder');
        //$this->call('SoTableSeeder');
        //$this->call('TrademarkTableSeeder');
        //s$this->call('UserTableSeeder');
        $this->call('SuportTableSeeder');


		
	}

}

<?php

use PcHistory\Entities\Company;
use Faker\Factory as Faker;

class CompanyTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 80) as $index)
        {
            $name=$faker->name;


            Company::create([
                'name'		    =>$name,
                'company_id'	=>$faker->randomNumber(10) ,
                'direction'		=>$faker->address,
                'phone'		    =>$faker->phoneNumber,
                'contact'		=>$faker->name,
                'state'         =>'active',
                'slug'			=>\Str::slug($name),

            ]);
        }
    }
} 
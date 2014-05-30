<?php

use PcHistory\Entities\User;
use Faker\Factory as Faker;



class UserTableSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 20) as $index)
        {
            $fullName=$faker->name;

            $user = User::create([
                'full_name'	=>$fullName,
                'email'		=>$faker->email,
                'type'      =>$faker->randomElement(['admin', 'company','user_compnay','technical']),
                'password'	=> \Hash::make('123456'),
                'avatar'    =>'default.png',
                'state'		=> 'active'
            ]);


        }
    }

} 
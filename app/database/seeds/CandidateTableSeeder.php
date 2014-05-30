<?php

use HireMe\Entities\Candidate;
use HireMe\Entities\User;


// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CandidateTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
			$fullName=$faker->name;

			$user = User::create([
				'full_name'	=>$fullName,
				'email'		=>$faker->email,
				'password'	=> '123456',
				'type'		=> 'candidate'
				]);

			Candidate::create([
				'id'			=>$user->id,
				'website_url'		=>$faker->url,
				'description'		=>$faker->text(200),
				'job_type'		=>$faker->randomElement(['full', 'partial','freelance']),
				'category_id'		=>$faker->randomElement([1, 2,3]),
				'avalible'		=>true,
				'slug'			=>\Str::slug($fullName),

			]);
		}
	}

}
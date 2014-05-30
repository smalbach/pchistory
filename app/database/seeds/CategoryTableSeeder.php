<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use HireMe\Entities\Category;


class CategoryTableSeeder extends Seeder {

	public function run()
	{
		Category::create([
			'id' => '1',
			'title' => 'Backend developers',
			'slug' => 'backend-developers',
			]);
		
		Category::create([
			'id' => '2',
			'title' => 'Frontend developers',
			'slug' => 'frontend-developers',
			]);

		Category::create([
			'id' => '3',
			'title' => 'Designers',
			'slug' => 'dedigners',
			]);
	}

}
<?php
use PcHistory\Entities\So;


class SoTableSeeder  extends Seeder {
    public function run()
    {
        So::create([
            'id' => '1',
            'name' => 'Windows Seven',
            'version' => 'Starter',
            
        ]);

        So::create([
            'id' => '2',
            'name' => 'Windows Seven',
            'version' => 'Ultimate',
        ]);

        So::create([
            'id' => '3',
            'name' => 'Windows Seven',
            'version' => 'Home',
        ]);


        So::create([
            'id' => '4',
            'name' => 'Windows Seven',
            'version' => 'Enterprise',
        ]);


        So::create([
            'id' => '5',
            'name' => 'Windows Xp',
            'version' => 'sp3',
        ]);

    }


} 
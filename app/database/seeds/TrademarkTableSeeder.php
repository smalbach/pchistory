<?php

use PcHistory\Entities\Trademark;
class TrademarkTableSeeder extends Seeder{
    public function run()
    {
        Trademark::create([
            'id' => '1',
            'name' => 'Compaq',
            'description' => 'none',

        ]);

        Trademark::create([
            'id' => '2',
            'name' => 'HP',
            'description' => '',
        ]);

        Trademark::create([
            'id' => '3',
            'name' => 'Clon',
            'description' => '',
        ]);


        Trademark::create([
            'id' => '4',
            'name' => 'Dell',
            'description' => '',
        ]);


        Trademark::create([
            'id' => '5',
            'name' => 'Toshiba',
            'description' => '',
        ]);

    }


} 
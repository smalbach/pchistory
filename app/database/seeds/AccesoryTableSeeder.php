<?php
use PcHistory\Entities\Accesory;


class AccesoryTableSeeder extends Seeder{

    public function run()
    {
        Accesory::create([
            'id' => '1',
            'name' => 'Disco duro',
            'description' => 'none',
            'capacity' => '500',
            'unity' => 'GB',
            'state' => 'active',


        ]);

        Accesory::create([
            'id' => '2',
            'name' => 'Procesador intel i3',
            'description' => 'none',
            'capacity' => '2.5',
            'unity' => 'MgH',
            'state' => 'active',
        ]);

        Accesory::create([
            'id' => '3',
            'name' => 'Board Asrock',
            'description' => 'none',
            'capacity' => '3000',
            'unity' => 'MgH',
            'state' => 'active',
        ]);


        Accesory::create([
            'id' => '4',
            'name' => 'Memoria DDR 1',
            'description' => 'none',
            'capacity' => '1',
            'unity' => 'GB',
            'state' => 'active',
        ]);


        Accesory::create([
            'id' => '5',
            'name' => 'Memoria DDR 2',
            'description' => 'none',
            'capacity' => '1',
            'unity' => 'Gb',
            'state' => 'active',
        ]);

        Accesory::create([
            'id' => '6',
            'name' => 'Board Foxccon',
            'description' => 'none',
            'capacity' => '3000',
            'unity' => 'MgH',
            'state' => 'active',
        ]);


    }
} 
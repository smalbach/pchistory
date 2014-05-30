<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 14:11
 */
use PcHistory\Entities\Suport;


class SuportTableSeeder extends Seeder {


    public function run(){
        Suport::create([
            'id' => '1',
            'name' => 'Aikon',
            'company_id' => '1',
            'direction' => 'dir ',
            'phone' => '111',
            'cell' => 'active',
            'email' => '--',
            'contact' => '--',
            'state' => 'active',
            'slug' => '--',


        ]);

        Suport::create([
            'id' => '2',
            'name' => 'TechSoft',
            'company_id' => '1',
            'direction' => 'Dir ',
            'phone' => '222',
            'cell' => 'active',
            'email' => '--',
            'contact' => '--',
            'state' => 'active',
            'slug' => '--',

        ]);

    }

} 
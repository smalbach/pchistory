<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 18:35
 */

namespace PcHistory\Managers;
use PcHistory\Entities\Accesory;

class AccesoryManger extends BaseManager{


    public function  getRules(){
        $rules=[
            'accesory_id'			=>'required',
            'so_id'				=>'required',
            'name'			=>'required',
            'so_id'=>'',
            'type'=>'',
            'internal_id'=>'',
            'location'=>'',
            'owner'=>'',
            'model'=>'',
            'serial'=>'',
            'voltage'=>'',
            'maintenance_day'=>'',
            'buy_date'=>'',
            'password'=>'',
            'observation'=>'',
            'photo'=>'',
            'state'=>'',
            'order'=>'',
            'type_pc'=>'',

        ];
        return $rules;
    }


} 
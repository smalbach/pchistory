<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 12:06
 */

namespace PcHistory\Managers;


class PcManager extends BaseManager{
    public function  getRules()
    {
        $rules=[
            'trademark_id'			=>'required',
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
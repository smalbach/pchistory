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


            'trademark_id' =>'required',
            'so_id' =>'',
            'type_id' =>'required',
            'location_id' =>'required',
            'owner_id' =>'required',
            'active_type_id' =>'required',
            'name' =>'required',
            'internal_id' =>'',
            'model' =>'',
            'serial' =>'',
            'voltage' =>'',
            'maintenance_day' =>'',
            'maintenance_freq' =>'',
            'buy_date' =>'',
            'password' =>'',
            'observation' =>'',
            'calibration' =>'',
            'ip' =>'',
            'waranty' =>'',
            'vendor' =>'',
            'photo' =>'',
            'state' =>'',
            'order' =>'',
            'cost' =>'',
            'waranty_end' =>'',
            'access_number' =>'',
            'amount' =>'',

            'type_pc' =>'',

        ];
        return $rules;
    }


} 
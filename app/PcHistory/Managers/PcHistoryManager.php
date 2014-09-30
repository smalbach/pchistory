<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 6/06/14
 * Time: 23:52
 */

namespace PcHistory\Managers;


class PcHistoryManager  extends BaseManager{
    public function  getRules()
    {
        $rules=[

            'pc_id' =>'required',
            'company_id' =>'required',
            'trademark_id' =>'required',
            'so_id' =>'required',
            'type_id' =>'required',
            'location_id' =>'required',
            'owner_id' =>'required',
            'active_type_id' =>'',
            'name' =>'',
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
            'motive'=>'',
            'amount' =>'',


        ];
        return $rules;
    }



} 
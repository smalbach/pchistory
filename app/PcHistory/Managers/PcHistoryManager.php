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
            'motive'=>'',
            'pc_id'=>'',
            'company_id'=>'',
            'user_id'=>''

        ];
        return $rules;
    }



} 
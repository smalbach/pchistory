<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 15:48
 */

namespace PcHistory\Managers;


class MaintenanceManaguer  extends BaseManager{
    public function  getRules()
    {
        $rules=[
            'support_id' 			=>'required',
            'issues'				=>'required',
            'pc_id'			=>'required',
            'owner'			=>'',
            'user'=>'',
            'priority'=>'',
            'observation'=>'',


        ];
        return $rules;
    }
} 
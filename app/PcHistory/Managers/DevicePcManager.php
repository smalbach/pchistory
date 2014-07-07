<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 23:14
 */

namespace PcHistory\Managers;


class DevicePcManager  extends BaseManager{

    public function  getRules()
    {
        $rules=[
            'device_id' =>'required',

            'description'=>'',
            'type'=>'required',
            'state'=>'',
            'pc_id'=>'required'


        ];
        return $rules;
    }


} 
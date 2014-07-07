<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 18:35
 */

namespace PcHistory\Managers;
use PcHistory\Entities\Device;

class DeviceManger extends BaseManager{


    public function  getRules(){
        $rules=[

            'name'			=>'required',
            'description'=>'',


            'state'=>'',

        ];
        return $rules;
    }


} 
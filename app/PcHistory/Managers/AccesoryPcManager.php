<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 23:14
 */

namespace PcHistory\Managers;


class AccesoryPcManager  extends BaseManager{

    public function  getRules()
    {
        $rules=[
            'accesory_id' =>'required',
            'value'         =>'required',
            'description'=>'',
            'state'=>'',
            'pc_id'=>'required'


        ];
        return $rules;
    }


} 
<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 23:14
 */

namespace PcHistory\Managers;


class SoftwarePcManager  extends BaseManager{

    public function  getRules()
    {
        $rules=[
            'software_id' =>'required',

            'description'=>'',
            'state'=>'',
            'pc_id'=>'required'


        ];
        return $rules;
    }


} 
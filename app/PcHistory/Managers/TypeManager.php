<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 13/06/14
 * Time: 8:44
 */

namespace PcHistory\Managers;


class TypeManager extends BaseManager {
    public function  getRules()
    {
        $rules=[
            'name'			=>'required',
            'description'	=>'',


        ];
        return $rules;
    }

} 
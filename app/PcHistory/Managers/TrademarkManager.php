<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 12/06/14
 * Time: 11:43
 */

namespace PcHistory\Managers;


class TrademarkManager extends BaseManager{
    public function  getRules()
    {
        $rules=[
            'name'			=>'required',
            'description'	=>'',


        ];
        return $rules;
    }


} 
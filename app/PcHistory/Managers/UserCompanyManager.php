<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 9/06/14
 * Time: 14:13
 */

namespace PcHistory\Managers;


class UserCompanyManager extends BaseManager{


    public function  getRules()
    {
        $rules=[
            'user_id'			=>'required',
            'company_id'				=>'',
            'state'			=>'',

        ];
        return $rules;
    }


} 
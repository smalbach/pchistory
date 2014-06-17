<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 9/06/14
 * Time: 14:09
 */

namespace PcHistory\Managers;


class UserManager extends BaseManager{
    public function  getRules()
    {
        $rules=[
            'full_name'			=>'required',
            'email'				=>'required|unique:users,email,' . $this->entity->id,
            'password'			=>'required',
            'type'=>'required',
            'avatar'=>'',


        ];
        return $rules;
    }


} 
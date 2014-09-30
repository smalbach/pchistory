<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 13/06/14
 * Time: 8:44
 */

namespace PcHistory\Managers;


class SecuritycopyManager extends BaseManager {

    public function  getRules()
    {
        $rules=[

            'pc_id'=>'required',
            'date'=>'',
            'state'=>'',

        ];
        return $rules;
    }

} 
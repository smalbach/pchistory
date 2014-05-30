<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 23:42
 */

namespace PcHistory\Managers;


class ReportManager extends BaseManager{

    public function  getRules()
    {
        $rules=[
            'maintenance_id'			=>'required',
            'find'				=>'required',
            'tecnical_report'			=>'',
            'recommendations'=>'',
            'state'=>'',


        ];
        return $rules;
    }

} 
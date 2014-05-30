<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 23:13
 */

namespace PcHistory\Repositories;

use PcHistory\Entities\Report;

class ReportRepo extends BaseRepo{

    public function getModel()
    {
        return new Report;
    }


    public function  newReport(){
        $report = new Report();

        return $report;

    }

} 
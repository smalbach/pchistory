<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 25/05/14
 * Time: 22:18
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\Company;

class CompanyRepo extends BaseRepo{

    public function getModel()
    {
        return new Company;
    }



    public function findLatest($take=20){

        return Company::all();
    }



} 
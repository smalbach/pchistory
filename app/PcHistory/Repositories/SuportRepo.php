<?php
namespace PcHistory\Repositories;

use PcHistory\Entities\Suport;

class SuportRepo extends BaseRepo{

    public function getModel()
    {
        return new Suport;
    }

    public function findName($name){
        $users = Suport::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre'));
        return $users;
    }

} 
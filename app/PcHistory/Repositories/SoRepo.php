<?php namespace PcHistory\Repositories;
use PcHistory\Entities\So;

class SoRepo  extends BaseRepo{


    public function getModel()
    {
        return new So;
    }


    public function findName($name){

        $users = So::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre','version'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }


    public function  newSo(){
        $so = new So();
        return $so;

    }

} 
<?php namespace PcHistory\Repositories;
use PcHistory\Entities\Location;

class LocationRepo  extends BaseRepo{


    public function getModel()
    {
        return new Location;
    }


    public function findName($name){

        $users = Location::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre','floor as Piso'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }


    public function  newlocation(){
        $type = new Location();
        return $type;

    }



} 
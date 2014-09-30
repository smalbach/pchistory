<?php namespace PcHistory\Repositories;
use PcHistory\Entities\Activetype;

class ActivetypeRepo  extends BaseRepo{


    public function getModel()
    {
        return new Activetype;
    }


    public function findName($name){

        $users = Activetype::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre','description as Descripcion'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }


    public function  newactivetype(){
        $type = new Activetype();
        return $type;

    }



} 
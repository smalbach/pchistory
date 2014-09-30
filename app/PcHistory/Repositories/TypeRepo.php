<?php namespace PcHistory\Repositories;
use PcHistory\Entities\Type;

class TypeRepo  extends BaseRepo{


    public function getModel()
    {
        return new Type;
    }


    public function findName($name){

        $users = Type::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre','description as Descripcion'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }


    public function  newtype(){
        $type = new Type();
        return $type;

    }



} 
<?php namespace PcHistory\Repositories;
use PcHistory\Entities\Securitycopy;

class SecuritycopyRepo  extends BaseRepo{


    public function getModel()
    {
        return new Securitycopy;
    }


    public function findName($name){

        $users = Securitycopy::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre','description as Descripcion'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }


    public function  newsecuritycopy(){
        $type = new Securitycopy();
        return $type;

    }


    public function select_all($id){

        $users = Securitycopy::where('pc_id', '=', "$id")->get(array('id', 'date','state'));

        return $users;
    }




} 
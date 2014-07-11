<?php


namespace PcHistory\Repositories;
use PcHistory\Entities\Software;

class SoftwareRepo extends BaseRepo{

    public function getModel()
    {
        return new Software;
    }

    public function findName($name){

        $users = Software::where('name', 'LIKE', "%$name%")
            ->orderBy('name')
            ->get(
                array('id',
                    'name as nombre',
                    'description as descripcion',
                    'version as Version'

                ));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }

    public function  newSoftware(){
        $Software = new Software();
        return $Software;

    }



}
<?php



namespace PcHistory\Repositories;
use PcHistory\Entities\Accesory;

class AccesoryRepo   extends BaseRepo{

    public function getModel()
    {
        return new Accesory;
    }

    public function findName($name){

        $users = Accesory::where('name', 'LIKE', "%$name%")
            ->orderBy('name')
            ->get(
                array('id',
                    'name as nombre',
                    'capacity as capacidad',
                    'unity as Unidad'

                ));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }

    public function  newAccesory(){
        $Accesory = new Accesory();
        return $Accesory;

    }



}
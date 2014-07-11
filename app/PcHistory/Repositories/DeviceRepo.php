<?php


namespace PcHistory\Repositories;
use PcHistory\Entities\Device;

class DeviceRepo extends BaseRepo{

    public function getModel()
    {
        return new Device;
    }

    public function findName($name){

        $users = Device::where('name', 'LIKE', "%$name%")
            ->orderBy('name')
            ->get(
                array('id',
                    'name as nombre',
                    'description as descripcion'


                ));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }

    public function  newDevice(){
        $Device = new Device();
        return $Device;

    }



}
<?php


use PcHistory\Repositories\DeviceRepo;
use PcHistory\Managers\DeviceManger;

class DeviceController extends BaseController{
    protected $deviceRepo;


    public function __construct(DeviceRepo $deviceRepo){
        $this->deviceRepo= $deviceRepo;


    }

    public  function search(){

        $name=Input::get("device_name");
        $so= $this->deviceRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($so);

    }

    public function save(){

        $device= $this->deviceRepo->newDevice();
        $manager = new DeviceManger($device, Input::all());
        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }


} 
<?php


use PcHistory\Repositories\LocationRepo;
use PcHistory\Managers\LocationManager;


class LocationController extends  BaseController{

    protected $locationRepo;

    public function __construct(LocationRepo $locationRepo){
        $this->locationRepo= $locationRepo;

    }

    public  function search(){

        $name=Input::get("location_name");
        $location= $this->locationRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($location);

    }

    public function save(){
        $location = $this->locationRepo->newlocation();

        $manager = new locationManager($location, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }





} 
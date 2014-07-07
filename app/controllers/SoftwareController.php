<?php


use PcHistory\Repositories\SoftwareRepo;
use PcHistory\Managers\SoftwareManger;

class SoftwareController extends BaseController{
    protected $softwareRepo;


    public function __construct(SoftwareRepo $softwareRepo){
        $this->softwareRepo= $softwareRepo;


    }

    public  function search(){

        $name=Input::get("software_name");
        $so= $this->softwareRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($so);

    }

    public function save(){

        $software= $this->softwareRepo->newSoftware();
        $manager = new SoftwareManger($software, Input::all());
        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }


} 
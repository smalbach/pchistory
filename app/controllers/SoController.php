<?php

use PcHistory\Repositories\SoRepo;
use PcHistory\Managers\SoManager;


class SoController  extends  BaseController{

    protected $soRepo;

    public function __construct(SoRepo $soRepo){
        $this->soRepo= $soRepo;

    }

    public  function search(){

        $name=Input::get("so_name");
        $so= $this->soRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($so);

    }

    public function save(){
        $so = $this->soRepo->newSo();

        $manager = new SoManager($so, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }



} 
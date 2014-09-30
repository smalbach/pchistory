<?php


use PcHistory\Repositories\ActivetypeRepo;
use PcHistory\Managers\ActivetypeManager;

class ActivetypeController extends  BaseController{

    protected $activetypeRepo;

    public function __construct(ActivetypeRepo $activetypeRepo){
        $this->activetypeRepo= $activetypeRepo;

    }

    public  function search(){

        $name=Input::get("activetype_name");
        $activetype= $this->activetypeRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($activetype);

    }

    public function save(){
        $activetype = $this->activetypeRepo->newactivetype();

        $manager = new activetypeManager($activetype, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }



} 
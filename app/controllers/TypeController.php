<?php


use PcHistory\Repositories\TypeRepo;
use PcHistory\Managers\TypeManager;

class TypeController extends  BaseController{

    protected $typeRepo;

    public function __construct(TypeRepo $typeRepo){
        $this->typeRepo= $typeRepo;

    }

    public  function search(){

        $name=Input::get("type_name");
        $type= $this->typeRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($type);

    }

    public function save(){
        $type = $this->typeRepo->newtype();

        $manager = new typeManager($type, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }



} 
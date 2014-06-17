<?php


use PcHistory\Repositories\AccesoryRepo;
use PcHistory\Managers\AccesoryManger;

class AccesoryController extends BaseController{
    protected $accesoryRepo;


    public function __construct(AccesoryRepo $accesoryRepo){
        $this->accesoryRepo= $accesoryRepo;


    }

    public  function search(){

        $name=Input::get("accesory_name");
        $so= $this->accesoryRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($so);

    }

    public function save(){

        $accesory= $this->accesoryRepo->newAccesory();
        $manager = new AccesoryManger($accesory, Input::all());
        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }


} 
<?php

use PcHistory\Repositories\SecuritycopyRepo;
use PcHistory\Managers\SecuritycopyManager;


class SecuritycopyController extends  BaseController{

    protected $securitycopyRepo;

    public function __construct(SecuritycopyRepo $securitycopyRepo){
        $this->securitycopyRepo= $securitycopyRepo;

    }

    public  function search(){

        $name=Input::get("pc");
        $securitycopy= $this->securitycopyRepo->select_all($name);
        // var_dump($trademarks);
        return Response::json($securitycopy);

    }

    public function save(){
        $securitycopy = $this->securitycopyRepo->newsecuritycopy();

        $manager = new securitycopyManager($securitycopy, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }



} 
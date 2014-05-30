<?php


use PcHistory\Repositories\AccesoryRepo;


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



} 
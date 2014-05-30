<?php

use PcHistory\Repositories\SoRepo;


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

} 
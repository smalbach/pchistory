<?php

use PcHistory\Repositories\SuportRepo;

class SuportController extends BaseController{
    protected $suportRepo;

    public function __construct(SuportRepo $suportRepo){
        $this->suportRepo= $suportRepo;

    }

    public  function search(){

        $name=Input::get("support_name");
        $supports= $this->suportRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($supports);

    }

} 
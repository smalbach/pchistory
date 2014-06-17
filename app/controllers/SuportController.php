<?php

use PcHistory\Repositories\SuportRepo;
use PcHistory\Repositories\User_supportsRepo;
use PcHistory\Repositories\MaintenenceRepo;

class SuportController extends BaseController{

    protected $suportRepo;
    protected $usersupportRepo;
    protected $maintenenceRepo;
    public function __construct(SuportRepo $suportRepo,
                                User_supportsRepo $user_supportsRepo,
                                MaintenenceRepo $maintenenceRepo){
        $this->suportRepo= $suportRepo;
        $this->usersupportRepo=$user_supportsRepo;
        $this->maintenenceRepo=$maintenenceRepo;

    }


    public  function admin(){
        return View::make('technical/home');
    }

    public  function search(){

        $name=Input::get("support_name");
        $supports= $this->suportRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($supports);

    }

    public  function technical(){
        $state="waiting";
        if(Input::get('state')!="")
            $state=Input::get('state');
        else if(Input::get('state')=="_")
            $state="";

        //echo $state;
        $usr=Auth::user()->id;

        $idsupport= $this->usersupportRepo->search_support($usr);

        $id=$idsupport[0]['support_id'];
        $orders=$this->maintenenceRepo->search_all_orders($id,$state);


        return View::make('technical/list', compact('orders','state'));
    }



} 
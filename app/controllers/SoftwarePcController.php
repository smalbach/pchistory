<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 23:23
 */

use PcHistory\Repositories\SoftwarePcRepo as apRepo;
use PcHistory\Managers\SoftwarePcManager ;

class SoftwarePcController extends BaseController{

    protected $apRepo;
    protected $accmanager;

    public  function __construct(apRepo $apRepo){
       $this->apRepo=$apRepo;
        //$this->accmanager= $accmanager;
    }

    public function add_pc(){
        $acpc = $this->apRepo->newSoftware();


        $manager = new  SoftwarePcManager($acpc,Input::all());


        if($manager->save()){
            return Response::json(true);
        }

        return Response::json(false);

    }


    public function searh_all(){
        $id=Input::get('pc_id');


        $accesories= $this->apRepo->searhAll($id);
        //echo "wii";
        return Response::json($accesories);
    }

    public function delete_ac(){
        $id=Input::get('software_del');
        $motive=Input::get('motive');


       $accesories= $this->apRepo->update_ac($id,$motive);
       // return Response::json($accesories);
    }


} 
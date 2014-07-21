<?php

use PcHistory\Repositories\PcRepo;
use PcHistory\Repositories\AccesoryPcRepo;
use PcHistory\Repositories\PcHistoryRepo;
use PcHistory\Repositories\SoftwarePcRepo;
use PcHistory\Repositories\DevicePcRepo;
use PcHistory\Managers\PcHistoryManager;
use PcHistory\Managers\PcManager;


class PcController extends  BaseController{


    protected  $company;
    protected  $companyRepo;
    protected  $pcRepo;
    protected  $accesoryxpcRepo;
    protected  $pcHistoryRepo;
    protected  $softwarePcRepo;
    protected  $devicePcRepo;


    public function __construct(PcRepo $pcRepo,
                                AccesoryPcRepo $accesoryxPcRepo,
                                PcHistoryRepo $pcHistoryRepo,
                                SoftwarePcRepo $softwarePcRepo,
                                DevicePcRepo $devicePcRepo){
        $this->company=Session::get('company');
        $this->pcRepo=$pcRepo;
        $this->accesoryxpcRepo=$accesoryxPcRepo;
        $this->pcHistoryRepo=$pcHistoryRepo;
        $this->softwarePcRepo=$softwarePcRepo;
        $this->devicePcRepo=$devicePcRepo;



    }

    public function pc_list(){

        $pcs = $this->pcRepo->search_all($this->company);
        $company=$this->company;


        return View::make('pcs/list', compact('pcs','company'));
    }

    public function pc_list_maintenences(){

        $pcs = $this->pcRepo->search_all($this->company);
        $company=$this->company;


        return View::make('pcs/maintenances_day', compact('pcs','company'));
    }



    public function add(){
        $company=$this->company;

        return View::make("pcs/add", compact('company'));
    }

    public function pc_save(){

        $pc = $this->pcRepo->newPc();

        $manager = new PcManager($pc, Input::all());


        if($manager->save()){
            $id=$manager->lastId();
           return Redirect::action('PcController@pc_detail', array('id' => $id) );
        }

        return Redirect::back()->withInput()->withErrors($manager->getErrors());
    }

    public  function pc_detail(){
        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);
        $company=$this->company;


        $accesories= $this->accesoryxpcRepo->searhAll($id);
        $softwares= $this->softwarePcRepo->searhAll($id);
        $devices= $this->devicePcRepo->searhAll($id);
        //return Response::json($accesories);


        return View::make('pcs/detail', compact('pc','company','accesories','id','softwares','devices'));

    }

    public  function pc_edit(){
        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);
        $company=$this->company;


        return View::make('pcs/edit', compact('pc','company','id'));

    }

    public function pc_update(){

        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);

        $manager = new PcManager($pc, Input::all());




        $datahis=array(
            'trademark_id'      =>$pc->trademark_id,
            'so_id'				=>$pc->so_id,
            'name'			    =>$pc->name,
            'company_id'	    =>$pc->company_id,
            'user_id'	        =>Auth::user()->id,
            'type'              =>$pc->type,
            'internal_id'       =>$pc->internal_id,
            'location'          =>$pc->location,
            'owner'             =>$pc->owner,
            'model'             =>$pc->model,
            'serial'            =>$pc->serial,
            'voltage'           =>$pc->voltage,
            'maintenance_day'   =>$pc->maintenance_day,
            'buy_date'          =>$pc->buy_date,
            'password'          =>$pc->password,
            'observation'       =>$pc->observation,
            'photo'             =>$pc->photo,
            'state'             =>$pc->state,
            'order'             =>$pc->order,
            'type_pc'           =>$pc->type_pc,
            'motive'            =>Input::get('motive'),
            'pc_id'             =>$pc->id,
            'user_id'           =>Auth::user()->id,

        );



        $pcHis=$this->pcHistoryRepo->newHistory();

        $managerHis = new PcHistoryManager($pcHis, $datahis);

         if($managerHis->save()){
             if($manager->save()){
                 $id=$manager->lastId();
                 return Redirect::action('PcController@pc_detail', array('id' => $id) );
             }
         }



        return Redirect::back()->withInput()->withErrors($manager->getErrors());
    }



} 
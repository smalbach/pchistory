<?php
use PcHistory\Repositories\CompanyRepo;
use PcHistory\Repositories\PcRepo;
use PcHistory\Managers\PcManager;
use PcHistory\Repositories\AccesoryPcRepo;


class PcController extends  BaseController{


    protected  $company;
    protected  $companyRepo;
    protected  $pcRepo;
    protected  $accesoryxpcRepo;


    public function __construct(CompanyRepo  $companyrepo,
                                PcRepo $pcRepo,
                                AccesoryPcRepo $accesoryxPcRepo ){
        $this->companyRepo=$companyrepo;
        $this->pcRepo=$pcRepo;
        $this->accesoryxpcRepo=$accesoryxPcRepo;

        $this->company=$this->companyRepo->find(Session::get('company_id'));

    }

    public function pc_list(){

        $pcs = $this->pcRepo->search_all($this->company);
        $company=$this->company;


        return View::make('pcs/list', compact('pcs','company'));
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
        //return Response::json($accesories);


        return View::make('pcs/detail', compact('pc','company','accesories','id'));

    }



} 
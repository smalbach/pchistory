<?php

use PcHistory\Repositories\CompanyRepo;
use PcHistory\Repositories\MaintenenceRepo;
use PcHistory\Managers\MaintenanceManaguer;
use PcHistory\Repositories\PcRepo;

class MaintenanceController extends BaseController{

    protected $company;
    protected $companyRepo;
    protected $maintenenceRepo;
    protected $pcRepo;


    public function __construct(CompanyRepo  $companyrepo,
                                MaintenenceRepo $maintenenceRepo,
                                PcRepo $pcRepo){
        $this->companyRepo=$companyrepo;
        $this->maintenenceRepo=$maintenenceRepo;
        $this->pcRepo= $pcRepo;
        $this->company=Session::get('company');
    }

    public function new_order(){
        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);
        $company=$this->company;

        return View::make('maintenances/new', compact('pc','company','id'));
    }


    public function save_order(){

        $maint = $this->maintenenceRepo->newMaintenance();

        $manager = new MaintenanceManaguer($maint, Input::all());

        //dd($manager);
        if($manager->save()){

           return Redirect::action('MaintenanceController@list_orders');
        }

        return Redirect::back()->withInput()->withErrors($manager->getErrors());
    }

    public function list_orders(){
        $state="waiting";
        if(Input::get('state')!="")
            $state=Input::get('state');
        else if(Input::get('state')=="_")
            $state="";




        $orders = $this->maintenenceRepo->search_all($this->company->id,$state);
        $company=$this->company;


        return View::make('maintenances/list', compact('orders','company','state'));


    }

    public function do_orders(){
        $id=Input::get('order_id');
        $pc_id=Input::get('pc_id');
        $pc = $this->pcRepo->find($pc_id);

        $orders = $this->maintenenceRepo->updtae_order($id);
        $company=$this->company;

        return View::make('technical/make_order', compact('pc','orders','company','id'));
    }

    function pdf_order(){
        $id=Input::get('id');


        $pcs = $this->pcRepo->find_order($id);
         $html= View::make('maintenances/f_in_03', compact('pcs'))->render();
        //echo $html;
        return PDF::load($html, 'A4', 'portrait')->show();

    }

    function pdf_report(){

        $id=Input::get('id');
        $pcs = $this->pcRepo->find_report($id);
        $html= View::make('maintenances/f_in_05', compact('pcs'))->render();
        //echo $html;
        return PDF::load($html, 'A4', 'portrait')->show();
    }

} 
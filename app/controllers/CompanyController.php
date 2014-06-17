<?php

use PcHistory\Repositories\CompanyRepo;
use PcHistory\Entities\Company;
use \PcHistory\Repositories\user_companysRepo;

class CompanyController extends BaseController{

    protected $companyRepo;
    protected $comRepo;
    protected $company;

    public function __construct(CompanyRepo $companyRepo,user_companysRepo $comRepo){
        $this->companyRepo=$companyRepo;
        $this->comRepo=$comRepo;
    }



    public function index(){

        $usr=Auth::user()->id;

        $idcompany= $this->comRepo->search_company($usr);

        $id=$idcompany[0]['company_id'];

        return $this->search_company_user($id);

    }

    public function search_company(){
        $company_id =Input::get('company_id');
        $company=$this->companyRepo->find(Session::get('company_id'));
        Session::put('company', $company);
        return Redirect::route('dashboard');

    }

    public function dashboard(){

        $company=Session::get('company');

        return View::make('companies/dashboard', compact('company') );


    }

    public function search_company_user($id){

        $company=$this->companyRepo->find($id);

        Session::put('company', $company);

        return Redirect::route('dashboard');


    }


    public function user(){
       $usr=Auth::user()->id;

        $idcompany= $this->comRepo->search_company($usr);
        $company=Session::get('company');
        $id=$idcompany[0]['company_id'];


        return View::make('companies/user_dashboard', compact('company') );

    }

    public function user_list(){
        $company=Session::get('company');
        return View::make('companies/users_list', compact('company') );
    }


}
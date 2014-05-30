<?php

use PcHistory\Repositories\CompanyRepo;
use PcHistory\Entities\Company;


class CompanyController extends BaseController{

    protected $companyRepo;

    public function __construct(CompanyRepo $companyRepo){
        $this->companyRepo=$companyRepo;
    }



    public function index(){



        $companies = $this->companyRepo->findLatest();

        return View::make('companies/home', compact('companies') );

    }

    public function search_company(){
        $company_id =Input::get('company_id');
        Session::put('company_id', $company_id);
        return Redirect::route('dashboard');

    }

    public function dashboard(){

        $value=Session::get('company_id');
        $company = $this->companyRepo->find($value);

        return View::make('companies/dashboard', compact('company') );


    }



}
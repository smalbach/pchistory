<?php


use PcHistory\Repositories\SoftwareRepo;
use PcHistory\Managers\SoftwareManger;

class SoftwareController extends BaseController{

    protected $softwareRepo;
    protected  $company;

    public function __construct(SoftwareRepo $softwareRepo){
        $this->softwareRepo= $softwareRepo;
        $this->company=Session::get('company');

    }

    public  function search(){

        $name=Input::get("software_name");
        $so= $this->softwareRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($so);

    }

    public function save(){

        $software= $this->softwareRepo->newSoftware();
        $manager = new SoftwareManger($software, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }

    public function add(){
        $company=$this->company;

        return View::make("software/add", compact('company'));
    }

    public function soft_list(){

        $softwares = $this->softwareRepo->search_all($this->company);
        $company=$this->company;


        return View::make('software/list', compact('softwares','company'));
    }


    public function soft_list_ajax(){

        $filter = Input::get("filter");
        $value = Input::get("value");
        $softwares = $this->softwareRepo->search_filter($filter,$value,$this->company->id);
        return View::make('software/list_ajax', compact('softwares'));
    }



} 
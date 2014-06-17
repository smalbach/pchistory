<?php
use PcHistory\Repositories\ReportRepo;
use PcHistory\Managers\ReportManager;
use PcHistory\Repositories\MaintenenceRepo;
use PcHistory\Managers\MaintenanceManaguer;

class ReportController extends BaseController {

    protected $repoRepo;
    protected $rpMan;
    protected $maintenenceRepo;
    public function __construct(ReportRepo $repoRepo,
                                MaintenenceRepo $maintenenceRepo){

        $this->maintenenceRepo=$maintenenceRepo;
        $this->repoRepo=$repoRepo;


    }


    public  function save_report(){


       $repo = $this->repoRepo->newReport();


        $manager = new ReportManager($repo, Input::all());
        $id=Input::get('maintenance_id');
        $maintenance = $this->maintenenceRepo->find($id);
        $maintenance->state=Input::get('state');



        if($manager->save()){
            if($maintenance->save()){
                Return Redirect::route('technical_list');
            }

        }


        return Redirect::back()->withInput()->withErrors($manager->getErrors());


    }

} 
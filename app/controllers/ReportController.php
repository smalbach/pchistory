<?php
use PcHistory\Repositories\ReportRepo;
use PcHistory\Managers\ReportManager;
use PcHistory\Repositories\MaintenenceRepo;

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


        if($manager->save()){
           $this->maintenenceRepo->updtae_order_state(
                                                    Input::get('maintenance_id'),
                                                    Input::get('state'));
           Return Redirect::route('list_order');

        }


        //return Redirect::back()->withInput()->withErrors($manager->getErrors());


    }

} 
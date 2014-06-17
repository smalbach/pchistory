<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 7/06/14
 * Time: 12:49
 */

use PcHistory\Repositories\MaintenenceRepo;
use PcHistory\Repositories\PcHistoryRepo;
use PcHistory\Repositories\ReportRepo;


class PcHistoryController extends BaseController{

    protected $maintenenceRepo;
    protected $pchistoryRepo;
    protected $reportRepo;
    protected $company;



    public function __construct(MaintenenceRepo $maintenenceRepo,
                                PcHistoryRepo $pcHistoryRepo,
                                ReportRepo $reportRepo ){

        $this->maintenenceRepo=$maintenenceRepo;
        $this->pchistoryRepo=$pcHistoryRepo;
        $this->reportRepo=$reportRepo;
        $this->company=Session::get('company');

    }

    function  show_history(){
        $id=Input::get('pc_id');
        $company=$this->company->id;

        $reports= $this->pchistoryRepo->search_report($id);

        $accesories= $this->pchistoryRepo->search_accesories($id);


        $historys= $this->pchistoryRepo->search_pchistory($id,$company);

        return View::make('pchistories/showhistory', compact('reports','accesories','historys'));

    }

} 
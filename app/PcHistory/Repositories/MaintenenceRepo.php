<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 15:42
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\Maintenance;
use Illuminate\Support\Facades\DB;

class MaintenenceRepo extends BaseRepo{

    public function getModel()
    {
        return new Maintenance;
    }


    public function  newMaintenance(){
        $maintenence = new Maintenance();
        $maintenence->state=('waiting');
        return $maintenence;

    }

    public function search_all($company,$state='waiting'){

        $results = DB::table('maintenances')
            ->join('pcs', 'pcs.id', '=', 'maintenances.pc_id')
            ->join('companies', 'companies.id', '=', 'pcs.company_id')
            ->join('suports', 'suports.id', '=', 'maintenances.support_id')
            ->leftJoin('reports', 'reports.maintenance_id', '=', 'maintenances.id')
            ->select('maintenances.id as m_id',
                'pcs.name',
                'pcs.location',
                'pcs.owner',
                'suports.name as support',
                'maintenances.issues',
                'maintenances.priority',
                'maintenances.observation',
                'maintenances.state',
                'pcs.id as pc_id',
                'reports.find',
                'reports.tecnical_report',
                'reports.recommendations'
            )
            ->where('companies.id','=',$company)
            ->where('maintenances.state','like','%'.$state.'%')
            ->paginate(10)
            ;

        return $results;

    }



    public function updtae_order($id){
        $ac = Maintenance::find($id);
        $ac->state = 'processing';
        $ac->save();
        return $ac;
    }


    public function updtae_order_state($id,$state){
        $ac = Maintenance::find($id);
        $ac->state = $state;
        $ac->save();
        return $ac;
    }




} 
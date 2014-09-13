<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 11:59
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\Pc;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PcRepo extends BaseRepo {
    public function getModel()
    {
        return new Pc;
    }


    public function  newPc(){
        $pc = new Pc();
        $company=Session::get('company');
        $pc->company_id=$company->id;
        return $pc;

    }

    public function search_all($company){
        $pc = DB::table('pcs')
                  ->where('company_id','=',$company->id)
                  ->orderBy('name')
                  ->paginate(30);
        return $pc;
    }

    public function find_order($id){

        $results = DB::table('pcs')
            ->join('maintenances', 'pcs.id', '=', 'maintenances.pc_id')
            ->join('suports', 'suports.id', '=', 'maintenances.support_id')

            ->select(
                'pcs.name as p_name',
                'pcs.location',
                'maintenances.owner',
                'maintenances.*',
                'suports.name as s_name',
                'suports.email',
                'suports.phone',
                'suports.cell',
                'suports.contact'


            )
            ->where('maintenances.id','=',$id)
            ->get()
        ;

        return $results;

    }



    public function find_report($id){

        $results = DB::table('pcs')
            ->join('maintenances', 'pcs.id', '=', 'maintenances.pc_id')
            ->join('suports', 'suports.id', '=', 'maintenances.support_id')
            ->join('reports', 'maintenances.id', '=', 'reports.maintenance_id')
            ->join('trademarks', 'trademarks.id', '=', 'pcs.trademark_id')

            ->select(
                'pcs.name as p_name',
                'pcs.location',
                'pcs.model',
                'pcs.serial',
                'pcs.type',
                'pcs.internal_id',
                'maintenances.owner',
                'maintenances.*',
                'suports.name as s_name',
                'suports.email',
                'suports.phone',
                'suports.cell',
                'suports.contact',
                'reports.id as r_id',
                'reports.find',
                'reports.tecnical_report',
                'reports.recommendations',
                'reports.created_at as r_created_at',
                'reports.state as r_state',
                'reports.make',
                'trademarks.name as t_name'


            )
            ->where('reports.id','=',$id)
            ->get()
        ;

        return $results;

    }




} 
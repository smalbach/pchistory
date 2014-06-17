<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 6/06/14
 * Time: 23:48
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\PcHistory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PcHistoryRepo extends  BaseRepo{

    public function getModel()
    {
        return new PcHistory;
    }


    public function  newHistory(){
        $pc = new PcHistory();
        return $pc;

    }



    public function search_report($id){

        $results = DB::table('maintenances')
            ->join('pcs', 'pcs.id', '=', 'maintenances.pc_id')
            ->join('companies', 'companies.id', '=', 'pcs.company_id')
            ->join('suports', 'suports.id', '=', 'maintenances.support_id')
            ->leftJoin('reports', 'reports.maintenance_id', '=', 'maintenances.id')
            ->select(
                'reports.id as m_id',
                'pcs.name',
                'pcs.location',
                'pcs.owner',
                'suports.name as technical',
                'maintenances.issues',
                'maintenances.priority',
                'maintenances.observation',
                'maintenances.state',
                'pcs.id as pc_id',
                'reports.find',
                'reports.tecnical_report',
                'reports.recommendations'
            )
            ->where('pcs.id','=',$id)
            ->paginate(30);


        return $results;

    }

    public function search_accesories($id){

        $results = DB::table('accesory_pcs')
            ->join('accesories', 'accesories.id', '=', 'accesory_pcs.accesory_id')
            ->select(
                'accesories.name',
                'accesory_pcs.description',
                'accesories.updated_at'

            )
            ->where('accesory_pcs.pc_id','=',$id)
            ->where('accesory_pcs.state','=','trash')

            ->paginate(30);


        return $results;

    }


    public function search_pchistory($id,$company){

        $results = DB::table('pchistories')
            ->join('sos', 'sos.id', '=', 'pchistories.so_id')
            ->join('trademarks', 'trademarks.id', '=', 'pchistories.trademark_id')
            ->join('users', 'users.id', '=', 'pchistories.user_id')
            ->select(
                'sos.name as soname',
                'trademarks.name as tradename',
                'users.full_name as usname',
                'pchistories.*'

            )
            ->where('pchistories.pc_id','=',$id)
            ->where('pchistories.company_id','=',$company)

            ->paginate(30);


        return $results;

    }

} 
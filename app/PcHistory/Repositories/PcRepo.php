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

        $results = DB::table('pcs')
            ->join('locations', 'locations.id', '=', 'pcs.location_id')
            ->join('trademarks', 'trademarks.id', '=', 'pcs.trademark_id')
            ->join('users', 'users.id', '=', 'pcs.owner_id')

            ->select(
                'pcs.id',
                'pcs.owner_id',
                'pcs.name as p_name',
                'locations.name as l_name',
                'users.full_name',
                'pcs.internal_id',
                'trademarks.name as t_name'

            )
            ->where('company_id','=',$company->id)
            ->paginate(30);

        return $results;



    }





    public function find_order($id){

        $results = DB::table('pcs')
            ->join('maintenances', 'pcs.id', '=', 'maintenances.pc_id')
            ->join('suports', 'suports.id', '=', 'maintenances.support_id')
            ->join('locations', 'locations.id', '=', 'pcs.location_id')
            ->join('users', 'users.id', '=', 'pcs.owner_id')
            ->select(
                'pcs.name as p_name',
                'locations.name as location',
                'users.full_name as owner',
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
            ->join('locations', 'locations.id', '=', 'pcs.location_id')
            ->join('users', 'users.id', '=', 'pcs.owner_id')
            ->join('types', 'types.id', '=', 'pcs.type_id')

            ->select(
                'pcs.name as p_name',
                'locations.name as location',
                'pcs.model',
                'pcs.serial',
                'types.name as type',
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



    public function find_edit($id){

        $results = DB::table('pcs')


            ->join('trademarks', 'trademarks.id', '=', 'pcs.trademark_id')
            ->join('locations', 'locations.id', '=', 'pcs.location_id')
            ->join('users', 'users.id', '=', 'pcs.owner_id')
            ->join('types', 'types.id', '=', 'pcs.type_id')
            ->join('active_type', 'active_type.id', '=', 'pcs.active_type_id')

            ->select(
                'pcs.*',
                'locations.name as location',
                'users.full_name as owner',
                'types.name as type',
                'active_type.name as active_type',
                'pcs.internal_id',
                'trademarks.name as trademark'


            )
            ->where('pcs.id','=',$id)
            ->get()
        ;

        return $results;

    }

    public function search_filter($field, $value,$company){

      /*  trademark' >Marca</option>

            <option  value='type' >Typo</option>
            <option  value='location' >Ubicacion</option>
            <option  value='owner' >Responsable</option>
            <option  value='active_type'
        */

        if($field=="trademark") $field="trademarks.name";
        else if($field=="type") $field="types.name";
        else if($field=="location") $field="locations.name";
        else if($field=="owner") $field="users.full_name";


        $results = DB::table('pcs')
            ->join('locations', 'locations.id', '=', 'pcs.location_id')
            ->join('trademarks', 'trademarks.id', '=', 'pcs.trademark_id')
            ->join('users', 'users.id', '=', 'pcs.owner_id')
            ->join('types', 'types.id', '=', 'pcs.type_id')
            ->join('active_type', 'active_type.id', '=', 'pcs.active_type_id')
            ->select(
                'pcs.id',
                'pcs.owner_id',
                'pcs.name as p_name',
                'locations.name as l_name',
                'users.full_name',
                'pcs.internal_id',
                'trademarks.name as t_name'

            )
            ->where($field,'like','%'.$value.'%')
            ->paginate(30);



        return $results;
    }





} 
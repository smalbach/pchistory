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


} 
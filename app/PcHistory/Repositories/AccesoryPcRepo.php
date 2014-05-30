<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 15:41
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\AccesoryPc;
use Illuminate\Support\Facades\DB;
use PcHistory\Entities\Accesory;

class AccesoryPcRepo extends BaseRepo{


    public function getModel()
    {
        return new AccesoryPc;
    }

    public function searhAll($pc){



        $results = DB::table('accesories')
            ->join('accesory_pcs', 'accesories.id', '=', 'accesory_pcs.accesory_id')
            ->join('pcs', 'pcs.id', '=', 'accesory_pcs.pc_id')
            ->select(   'accesory_pcs.id as ap_id',
                        'accesories.name',
                        'accesories.capacity',
                        'accesories.unity',
                        'accesory_pcs.description',
                        'accesory_pcs.value'
                        )
            ->where('pcs.id','=',$pc)
            ->where('accesory_pcs.state','=','active')
            ->get();
        return $results;
    }


    public function  newAccesory(){
        $apc = new AccesoryPc();
        $apc->pc_id;
        return $apc;

    }

    public function delete_ac($id){
        $user = AccesoryPc::find($id);

        return $user->delete();
    }



    public function update_ac($id){
        $ac = AccesoryPc::find($id);
        $ac->state = 'trash';
        return $ac->save();
    }








} 
<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 15:41
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\SoftwarePc;
use Illuminate\Support\Facades\DB;
use PcHistory\Entities\Software;

class SoftwarePcRepo extends BaseRepo{


    public function getModel()
    {
        return new Software;
    }

    public function searhAll($pc){



        $results = DB::table('softwares')
            ->join('software_pcs', 'softwares.id', '=', 'software_pcs.software_id')
            ->join('pcs', 'pcs.id', '=', 'software_pcs.pc_id')
            ->select(   'software_pcs.id as ap_id',
                        'softwares.name',
                        'softwares.version',

                        'software_pcs.description'

                        )
            ->where('pcs.id','=',$pc)
            ->where('software_pcs.state','=','active')
            ->orderBy('softwares.name')
            ->get();
        return $results;
    }


    public function  newsoftware(){
        $apc = new SoftwarePc();
        $apc->pc_id;
        return $apc;

    }

    public function delete_ac($id){
        $user = SoftwarePc::find($id);

        return $user->delete();
    }



    public function update_ac($id,$motive){
        $ac = SoftwarePc::find($id);
        $ac->state = 'trash';
        $ac->description =$ac->description.'--'.$motive;
        return $ac->save();
    }








} 
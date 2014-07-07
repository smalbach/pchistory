<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 15:41
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\DevicePc;
use Illuminate\Support\Facades\DB;
use PcHistory\Entities\Device;

class DevicePcRepo extends BaseRepo{


    public function getModel()
    {
        return new Device;
    }

    public function searhAll($pc){



        $results = DB::table('devices')
            ->join('device_pcs', 'devices.id', '=', 'device_pcs.device_id')
            ->join('pcs', 'pcs.id', '=', 'device_pcs.pc_id')
            ->select(   'device_pcs.id as ap_id',
                        'devices.name',

                        'device_pcs.type',
                        'device_pcs.description'


                        )
            ->where('pcs.id','=',$pc)
            ->where('device_pcs.state','=','active')
            ->get();
        return $results;
    }


    public function  newdevice(){
        $apc = new DevicePc();
        $apc->pc_id;
        return $apc;

    }

    public function delete_ac($id){
        $user = DevicePc::find($id);

        return $user->delete();
    }



    public function update_ac($id,$motive){
        $ac = DevicePc::find($id);
        $ac->state = 'trash';
        $ac->description =$ac->description.'--'.$motive;
        return $ac->save();
    }








} 
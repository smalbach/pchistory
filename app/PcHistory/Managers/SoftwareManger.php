<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 18:35
 */

namespace PcHistory\Managers;
use PcHistory\Entities\Software;

class SoftwareManger extends BaseManager{


    public function  getRules(){
        $rules=[


            'name' =>'required',
            'state' =>'',
            'type' =>'required',
            'quantity' =>'',
            'quantity_licenses' =>'',
            'description' =>'',
            'developed' =>'',
            'support' =>'',
            'licences_number_server' =>'',
            'licences_number_client' =>'',
            'plataform' =>'',
            'language' =>'',
            'database' =>'',
            'last_vendor' =>'',
            'license_value' =>'',
            'maintenance_cost' =>'',
            'owner_soft' =>'',
            'owner_code' =>'',
            'restrictions' =>'',
            'support_state' =>'',
            'version' =>'',

        ];
        return $rules;
    }


} 
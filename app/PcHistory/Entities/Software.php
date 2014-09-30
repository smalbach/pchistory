<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 25/05/14
 * Time: 15:39
 */

namespace PcHistory\Entities;


class Software  extends \Eloquent {
    protected $table = 'softwares';

    protected $fillable = array(

        'name',
        'state',
        'type',
        'quantity',
        'quantity_licenses',
        'description',
        'developed',
        'support',
        'licences_number_server',
        'licences_number_client',
        'plataform',
        'language',
        'database',
        'last_vendor',
        'license_value',
        'maintenance_cost',
        'owner_soft',
        'owner_code',
        'restrictions',
        'support_state',
        'version',


    );

    public function software_pcs(){
        return $this->hasMany('PcHistory\Entities\SoftwarePc');
    }


} 
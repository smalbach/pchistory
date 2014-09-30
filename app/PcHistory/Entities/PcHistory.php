<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 6/06/14
 * Time: 23:47
 */

namespace PcHistory\Entities;


class PcHistory extends  \Eloquent{

    protected $fillable = array(
        'pc_id' ,
        'company_id' ,
        'trademark_id' ,
        'so_id' ,
        'type_id' ,
        'location_id' ,
        'owner_id' ,
        'active_type_id' ,
        'name' ,
        'internal_id' ,
        'model' ,
        'serial' ,
        'voltage' ,
        'maintenance_day' ,
        'maintenance_freq' ,
        'buy_date' ,
        'password' ,
        'observation' ,
        'calibration' ,
        'ip' ,
        'waranty' ,
        'vendor' ,
        'photo' ,
        'state' ,
        'order' ,
        'cost' ,
        'waranty_end' ,
        'access_number' ,
        'amount' ,
        'motive' ,


    );
    protected $table = 'pchistories';
    public  function trademark(){
        return $this->belongsTo('PcHistory\Entities\Pc');
    }


} 
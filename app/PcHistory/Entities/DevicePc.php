<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 15:34
 */

namespace PcHistory\Entities;


class DevicePc extends \Eloquent {
    protected $fillable = array(
        'device_id',
        'version',
        'description',
        'type',
        'state',
        'pc_id'

    );



    public  function software(){
        return $this->belongsTo('PcHistory\Entities\Device');
    }

    public  function pc(){
        return $this->belongsTo('PcHistory\Entities\Pc');
    }

} 
<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 12:00
 */

namespace PcHistory\Entities;


class Pc extends \Eloquent  {
    protected $fillable = array(

        'company_id',
        'trademark_id',
        'so_id',
        'type_id',
        'location_id',
        'owner_id',
        'active_type_id',
        'name',
        'internal_id',
        'model',
        'serial',
        'voltage',
        'maintenance_day',
        'maintenance_freq',
        'buy_date',
        'password',
        'observation',
        'calibration',
        'ip',
        'waranty',
        'vendor',
        'photo',
        'state',
        'order',
        'cost',
        'waranty_end',
        'access_number',
        'amount',

        'type_pc',

    );

    public  function trademark(){
        return $this->belongsTo('PcHistory\Entities\Trademark');
    }


    public function accesoriesxpc(){
        return $this->hasMany('PcHistory\Entities\Accesory_Pc');
    }

    public  function location(){
        return $this->belongsTo('PcHistory\Entities\Location');
    }


    public  function user(){
        return $this->belongsTo('PcHistory\Entities\User');
    }



} 
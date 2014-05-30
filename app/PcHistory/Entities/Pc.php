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
        'trademark_id',
        'name',
        'so_id',
        'type',
        'internal_id',
        'location',
        'owner',
        'model',
        'serial',
        'voltage',
        'maintenance_day',
        'buy_date',
        'password',
        'observation',
        'photo',
        'state',
        'order',
        'type_pc',

    );

    public  function trademark(){
        return $this->belongsTo('PcHistory\Entities\Trademark');
    }

    public  function so(){
        return $this->belongsTo('PcHistory\Entities\So');
    }

    public function accesoriesxpc(){
        return $this->hasMany('PcHistory\Entities\Accesory_Pc');
    }



} 
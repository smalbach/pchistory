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
        'motive',
        'pc_id',
        'user_id',
        'company_id',

    );
    protected $table = 'pchistories';
    public  function trademark(){
        return $this->belongsTo('PcHistory\Entities\Pc');
    }


} 
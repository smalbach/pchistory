<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 15:34
 */

namespace PcHistory\Entities;


class AccesoryPc extends \Eloquent {
    protected $fillable = array(
        'accesory_id',
        'value',
        'description',
        'state',
        'pc_id'

    );



    public  function accesory(){
        return $this->belongsTo('PcHistory\Entities\Accesory');
    }

    public  function pc(){
        return $this->belongsTo('PcHistory\Entities\Pc');
    }

} 
<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 15:43
 */

namespace PcHistory\Entities;


class Maintenance extends \Eloquent {
    protected $fillable = array(
        'support_id',
        'issues',
        'priority',
        'observation',
        'pc_id',

    );


    public  function trademark(){
        return $this->belongsTo('PcHistory\Entities\Pc');
    }

} 
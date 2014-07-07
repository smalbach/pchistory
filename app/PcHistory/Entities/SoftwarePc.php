<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 27/05/14
 * Time: 15:34
 */

namespace PcHistory\Entities;


class SoftwarePc extends \Eloquent {
    protected $fillable = array(
        'software_id',
        'version',
        'description',
        'state',
        'pc_id'

    );



    public  function software(){
        return $this->belongsTo('PcHistory\Entities\Software');
    }

    public  function pc(){
        return $this->belongsTo('PcHistory\Entities\Pc');
    }

} 
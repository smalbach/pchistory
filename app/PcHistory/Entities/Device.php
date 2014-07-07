<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 25/05/14
 * Time: 15:39
 */

namespace PcHistory\Entities;


class Device  extends \Eloquent {
    protected $table = 'devices';

    protected $fillable = array(

        'name',
        'description',

        'state',

    );

    public function software_pcs(){
        return $this->hasMany('PcHistory\Entities\DevicePc');
    }


} 
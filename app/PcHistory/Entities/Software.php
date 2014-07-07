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
        'description',
        'version',

        'state',

    );

    public function software_pcs(){
        return $this->hasMany('PcHistory\Entities\SoftwarePc');
    }


} 
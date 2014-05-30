<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 25/05/14
 * Time: 15:39
 */

namespace PcHistory\Entities;


class Accesory  extends \Eloquent {

    public function accesoriesxpc(){
        return $this->hasMany('PcHistory\Entities\AccesoriesxPc');
    }


} 
<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 25/05/14
 * Time: 13:54
 */

namespace PcHistory\Entities;


class Trademark extends \Eloquent  {
    protected $fillable = array(

        'name',
        'description',

    );

    public function pcs(){
        return $this->hasMany('PcHistory\Entities\Pc');
    }



} 
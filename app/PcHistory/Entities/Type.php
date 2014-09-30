<?php namespace PcHistory\Entities;



class Type   extends \Eloquent {
    protected $fillable =  array(

        'name',
        'description',

    );



    public function pcs(){
        return $this->hasMany('PcHistory\Entities\Pc');
    }

} 
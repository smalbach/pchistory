<?php namespace PcHistory\Entities;



class So   extends \Eloquent {
    protected $fillable =  array(

        'name',
        'version',

    );



    public function pcs(){
        return $this->hasMany('PcHistory\Entities\Pc');
    }

} 
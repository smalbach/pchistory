<?php namespace PcHistory\Entities;



class Activetype   extends \Eloquent {
    protected $table = 'active_type';
    protected $fillable =  array(

        'name',
        'description',

    );



    public function pcs(){
        return $this->hasMany('PcHistory\Entities\Pc');
    }

} 
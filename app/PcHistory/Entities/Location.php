<?php namespace PcHistory\Entities;



class Location   extends \Eloquent {

    protected $table = 'locations';

    protected $fillable =  array(

        'name',
        'floor',

    );



    public function pcs(){
        return $this->hasMany('PcHistory\Entities\Pc');
    }

} 
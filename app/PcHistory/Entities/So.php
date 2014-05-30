<?php namespace PcHistory\Entities;



class So   extends \Eloquent {
    protected $fillable = [];



    public function pcs(){
        return $this->hasMany('PcHistory\Entities\Pc');
    }

} 
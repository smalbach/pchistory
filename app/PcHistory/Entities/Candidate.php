<?php namespace PcHistory\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];
            protected $perPage=10;


    public  function user(){
        return $this->hasOne('PcHistory\Entities\User','id','id');
    }

    public  function category(){
        return $this->belongsTo('PcHistory\Entities\Category');
    }

    public function getJobTypeTitleAttribute(){
    	return \Lang::get('utils.job_types.'.$this->job_type);

    }


}
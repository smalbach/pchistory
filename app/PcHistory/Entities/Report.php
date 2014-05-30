<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 28/05/14
 * Time: 23:14
 */

namespace PcHistory\Entities;


class Report extends \Eloquent{

    protected $fillable = array(
        'maintenance_id',
        'find',
        'tecnical_report',
        'recommendations',
        'state',


    );

    public  function trademark(){
        return $this->belongsTo('PcHistory\Entities\Maintenance');
    }

} 
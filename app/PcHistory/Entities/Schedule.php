<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 29/09/14
 * Time: 23:35
 */

namespace PcHistory\Entities;


class Schedule extends \Eloquent {
    protected $fillable =  array(

        'pc_id',
        'date',
        'state',

    );


} 
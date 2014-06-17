<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 6/06/14
 * Time: 18:35
 */

namespace PcHistory\Entities;


class User_companys extends \Eloquent {

    protected $fillable = array(
        'user_id',
        'company_id',
        'state',
        'type'
    );

} 
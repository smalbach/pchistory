<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 26/05/14
 * Time: 14:31
 */

namespace PcHistory\Repositories;


use PcHistory\Entities\Trademark;

class TrademarkRepo  extends BaseRepo{

    public function getModel()
    {
        return new Trademark;
    }

    public function findName($name){
         $users = Trademark::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre'));
         //$this->model->find($name);
        //dd($users);
            return $users;
    }

} 
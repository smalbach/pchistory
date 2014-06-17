<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 7/06/14
 * Time: 9:23
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\User_support;

class User_supportsRepo extends BaseRepo{
    public function getModel()
    {
        return new User_support;
    }

    public function search_support($user){
        $support = user_support::where('user_id', '=', $user)->get(array('support_id'));
        /*$conpany = DB::table('user_companys')
            ->select('company_id')
            ->where('user_id','=',$user)
            ->get();;
*/
        return $support;
    }
} 
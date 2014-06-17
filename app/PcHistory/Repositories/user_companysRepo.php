<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 6/06/14
 * Time: 18:28
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\User_companys;
use Illuminate\Support\Facades\DB;

class user_companysRepo extends BaseRepo{

    public function getModel(){
        return new user_companys;
    }


    public function search_company($user){
        $conpany = user_companys::where('user_id', '=', $user)->get(array('company_id'));
        /*$conpany = DB::table('user_companys')
            ->select('company_id')
            ->where('user_id','=',$user)
            ->get();;
*/
        return $conpany;
    }

    public function newUserCompany(){
        $usr= new user_companys();
        return $usr;
    }

} 
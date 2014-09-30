<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 9/06/14
 * Time: 12:36
 */

namespace PcHistory\Repositories;
use PcHistory\Entities\User;
use Illuminate\Support\Facades\DB;


class UserRepo extends BaseRepo{


    public function getModel()
    {
        return new User;
    }


    public function search_users_company($company,$name,$state){

        $results = DB::table('users')
            ->join('user_companys', 'users.id', '=', 'user_companys.user_id')
            ->select(
                'users.*'
            )
            ->where('users.full_name','like','%'.$name.'%')
            ->where('users.state','like','%'.$state.'%')
            ->where('user_companys.company_id','=',$company)
            ->paginate(30);

        return $results;
    }

    public function newUser(){
        $pc = new User();
        return $pc;
    }

    public function findName($name){

        $users = User::where('full_name', 'LIKE', "%$name%")->get(array('id', 'full_name as nombre','email as E-mail'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }




} 
<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 5/06/14
 * Time: 17:22
 */

use PcHistory\Entities\User;


class AuthController extends BaseController{
    public function login()
    {

        $data = Input::only('email', 'password');

        $credentials = ['email' => $data['email'], 'password' => $data['password']];

        if (Auth::attempt($credentials)){
            switch(Auth::user()->type){
                case "admin":
                    return Redirect::route('admin');
                    break;
                case "company":

                    return Redirect::route('company');
                    break;
                case "user_company":
                    return Redirect::route('user_company');
                    break;
                case "technical":
                    return Redirect::route('technical');
                    break;



            }




        }

       return Redirect::back()->with('login_error', 1);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }



} 
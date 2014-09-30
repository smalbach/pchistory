<?php 

use PcHistory\Entities\User;
use PcHistory\Repositories\CandidateRepo;
use PcHistory\Managers\RegisterManager;
use PcHistory\Managers\UserCompanyManager as uscomManager;
use PcHistory\Repositories\UserRepo;
use PcHistory\Repositories\user_companysRepo;
use PcHistory\Managers\UserManager;

class UserController extends BaseController {

    protected  $candidateRepo;
    protected  $userRepo;
    protected  $usercomRepo;

    public function __construct(CandidateRepo $candidateRepo,
                                UserRepo $userRepo,
                                user_companysRepo $usercomRepo
                                ){
        $this->candidateRepo=$candidateRepo;
        $this->userRepo=$userRepo;
        $this->usercomRepo=$usercomRepo;

    }

	function signup(){

		return View::make("users/sign-up");
	}

	public function register(){

        $user = $this->candidateRepo->newCandidate();

        $manager = new RegisterManager($user, Input::all());




		if($manager->save()){
			return Redirect::route('home');
		}

	    return Redirect::back()->withInput()->withErrors($manager->getErrors());
	}


    public function user_show(){
        $state=Input::get('state');
        $full_name=Input::get('full_name');


        $company=Session::get('company');

        $users= $this->userRepo->search_users_company($company->id,$full_name,$state);

        return View::make('users/admin_users', compact('company','users','state','full_name') );

    }

    public function save_user_company(){

        $company=Session::get('company');


        $user = $this->userRepo->newUser();
        $user->state='active';
        $manager = new UserManager($user, Input::all());

        $id=$manager->lastId();

        if($manager->save()){
            $id=$manager->lastId();


            $user_company = $this->usercomRepo->newUserCompany();

            $data=[
                'user_id'		=>$id,
                'company_id'    =>$company->id,
                'state'			=>'active'
            ];

            $managerComapny = new uscomManager($user_company,$data);



            if($managerComapny->save()){
                return 3;

            }else{
                return 2;
            }


        }else{
            return 1;
        }

        //return Redirect::back()->withInput()->withErrors($manager->getErrors());



    }

    public  function search(){

        $name=Input::get("owner_name");
        $location= $this->userRepo->findName($name);
        // var_dump($trademarks);
        return Response::json($location);

    }



}

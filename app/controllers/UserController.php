<?php 

use PcHistory\Entities\User;
use PcHistory\Repositories\CandidateRepo;
use PcHistory\Managers\RegisterManager;
use PcHistory\Components\FieldBuilder;

class UserController extends BaseController {

        protected  $candidateRepo;

    public function __construct(CandidateRepo $candidateRepo){
        $this->candidateRepo=$candidateRepo;

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


	
}

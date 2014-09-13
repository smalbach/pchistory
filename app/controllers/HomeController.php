<?php
use PcHistory\Repositories\CandidateRepo;


class HomeController extends BaseController {

	protected $candidateRepo;

	public function __construct(CandidateRepo $candidateRepo){
		$this->candidateRepo=$candidateRepo;
	}


	public function index(){
	        Auth::logout();
			//$latest_candidates = $this->candidateRepo->findLatest();
	        $hast = \Hash::make('123456');
			return View::make('home', compact('hast'));
	}


	
}

<?php
use  PcHistory\Repositories\TrademarkRepo;

class TrademarkController extends BaseController {

    protected $trademarkRepo;

    public function __construct(TrademarkRepo $trademarkRepo){
        $this->trademarkRepo= $trademarkRepo;

    }

    public  function search(){

        $name=Input::get("trademark_name");
        $trademarks= $this->trademarkRepo->findName($name);
       // var_dump($trademarks);
        return Response::json($trademarks);

    }



} 
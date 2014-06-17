<?php
use  PcHistory\Repositories\TrademarkRepo;
use PcHistory\Managers\TrademarkManager;

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


    public function save(){
        $trademark = $this->trademarkRepo->newTrademark();

        $manager = new TrademarkManager($trademark, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }

} 
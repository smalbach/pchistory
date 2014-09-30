<?php

use PcHistory\Repositories\ScheduleRepo;
use PcHistory\Managers\ScheduleManager;


class ScheduleController extends  BaseController{

    protected $scheduleRepo;

    public function __construct(ScheduleRepo $scheduleRepo){
        $this->scheduleRepo= $scheduleRepo;

    }

    public  function search(){

        $name=Input::get("pc");
        $schedule= $this->scheduleRepo->select_all($name);
        // var_dump($trademarks);
        return Response::json($schedule);

    }

    public function save(){
        $schedule = $this->scheduleRepo->newschedule();

        $manager = new scheduleManager($schedule, Input::all());

        if($manager->save()){
            $id=$manager->lastId();
            return $id;
        }

        return "error";
    }



} 
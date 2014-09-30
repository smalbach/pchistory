<?php namespace PcHistory\Repositories;
use PcHistory\Entities\Schedule;

class ScheduleRepo  extends BaseRepo{


    public function getModel()
    {
        return new Schedule;
    }


    public function findName($name){

        $users = Schedule::where('name', 'LIKE', "%$name%")->get(array('id', 'name as nombre','description as Descripcion'));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }


    public function  newschedule(){
        $type = new Schedule();
        return $type;

    }


    public function select_all($id){

        $users = Schedule::where('pc_id', '=', "$id")->get(array('id', 'date','state'));

        return $users;
    }




} 
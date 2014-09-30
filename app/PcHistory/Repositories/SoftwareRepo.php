<?php


namespace PcHistory\Repositories;

use PcHistory\Entities\Software;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SoftwareRepo extends BaseRepo{

    public function getModel()
    {

        $software = new Software();

        return $software;
    }

    public function findName($name){

        $users = Software::where('name', 'LIKE', "%$name%")
            ->orderBy('name')
            ->get(
                array('id',
                    'name as nombre',
                    'description as descripcion',
                    'version as Version'

                ));
        //$this->model->find($name);
        //dd($users);
        return $users;
    }

    public function  newSoftware(){
        $Software = new Software();
        $company=Session::get('company');
        $Software->company_id=$company->id;

        return $Software;

    }



    public function search_all($company){
        $pc = DB::table('softwares')
            ->where('company_id','=',$company->id)
            ->orderBy('type')
            ->orderBy('name')
            ->paginate(3);
        return $pc;
    }

    public function search_filter($field, $value,$company){




        $pc = DB::table('softwares')
            ->where('company_id','=',$company)
            ->where($field,'like','%'.$value.'%')
            ->orderBy('type')
            ->orderBy('name')
            ->paginate(3);
        return $pc;
    }


}
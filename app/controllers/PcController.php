<?php

use PcHistory\Repositories\PcRepo;
use PcHistory\Repositories\AccesoryPcRepo;
use PcHistory\Repositories\PcHistoryRepo;
use PcHistory\Repositories\SoftwarePcRepo;
use PcHistory\Repositories\DevicePcRepo;
use PcHistory\Managers\PcHistoryManager;
use PcHistory\Managers\PcManager;


class PcController extends  BaseController{


    protected  $company;
    protected  $companyRepo;
    protected  $pcRepo;
    protected  $accesoryxpcRepo;
    protected  $pcHistoryRepo;
    protected  $softwarePcRepo;
    protected  $devicePcRepo;


    public function __construct(PcRepo $pcRepo,
                                AccesoryPcRepo $accesoryxPcRepo,
                                PcHistoryRepo $pcHistoryRepo,
                                SoftwarePcRepo $softwarePcRepo,
                                DevicePcRepo $devicePcRepo){
        $this->company=Session::get('company');
        $this->pcRepo=$pcRepo;
        $this->accesoryxpcRepo=$accesoryxPcRepo;
        $this->pcHistoryRepo=$pcHistoryRepo;
        $this->softwarePcRepo=$softwarePcRepo;
        $this->devicePcRepo=$devicePcRepo;



    }

    public function pc_list(){

        $pcs = $this->pcRepo->search_all($this->company);
        $company=$this->company;


        return View::make('pcs/list', compact('pcs','company'));
    }

    public function pc_list_ajax(){
        $filter = Input::get("filter");
        $value = Input::get("value");
        $pcs = $this->pcRepo->search_filter($filter,$value,$this->company);
        $company=$this->company;


        return View::make('pcs/list_ajax', compact('pcs'));
    }



    public function pc_list_maintenences(){

        $pcs = $this->pcRepo->search_all($this->company);
        $company=$this->company;


        return View::make('pcs/maintenances_day', compact('pcs','company'));
    }



    public function add(){
        $company=$this->company;

        return View::make("pcs/add", compact('company'));
    }

    public function pc_save(){

        $pc = $this->pcRepo->newPc();

        $manager = new PcManager($pc, Input::all());


        if($manager->save()){
            $id=$manager->lastId();
            //guardamos la imagen en public/imgs con el nombre original
            $i = 0;//indice para el while
            //separamos el nombre de la img y la extensión
            $file = Input::file('photo');
            $info = explode(".",$file->getClientOriginalName());
            //asignamos de nuevo el nombre de la imagen completo
            $miImg = $file->getClientOriginalName();
            //mientras el archivo exista iteramos y aumentamos i
            while(file_exists('eq/'. $miImg)){
                $i++;
                $miImg = $info[0]."-".$i."".".".$info[1];
            }
            //guardamos la imagen con otro nombre ej foto(1).jpg || foto(2).jpg etc
            $file->move("eq",$miImg);
            //si ha cambiado el nombre de la foto por el original actualizamos el campo foto de la bd

            $pc= $this->pcRepo->find($id);
            $pc->photo = $miImg;
            $pc->save();
            //redirigimos con un mensaje flash




           return Redirect::action('PcController@pc_detail', array('id' => $id) );
        }

        //return Redirect::back()->withInput()->withErrors($manager->getErrors());
    }

    public  function pc_detail(){
        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);
        $company=$this->company;


        $accesories= $this->accesoryxpcRepo->searhAll($id);
        $softwares= $this->softwarePcRepo->searhAll($id);
        $devices= $this->devicePcRepo->searhAll($id);
        //return Response::json($accesories);


        return View::make('pcs/detail', compact('pc','company','accesories','id','softwares','devices'));

    }

    public  function pc_edit(){
        $id=Input::get('id');
        $pcs = $this->pcRepo->find_edit($id);
        $company=$this->company;


        return View::make('pcs/edit', compact('pcs','company','id'));

    }

    public function pc_update(){

        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);


        $file = Input::file('oldphoto');
        $oldphoto=Input::get('photo');



        $manager = new PcManager($pc, Input::all());

        $company=$this->company->id;

        $datahis=array(
            'pc_id' =>$pc->id,
            'company_id' =>$company,
            'trademark_id' =>$pc->trademark_id,
            'so_id' =>$pc->so_id,
            'type_id' =>$pc->type_id,
            'location_id' =>$pc->location_id,
            'owner_id' =>$pc->owner_id,
            'active_type_id' =>$pc->active_type_id,
            'name' =>$pc->name,
            'internal_id' =>$pc->internal_id,
            'model' =>$pc->model,
            'serial' =>$pc->serial,
            'voltage' =>$pc->voltage,
            'maintenance_day' =>$pc->maintenance_day,
            'maintenance_freq' =>$pc->maintenance_freq,
            'buy_date' =>$pc->buy_date,
            'password' =>$pc->password,
            'observation' =>$pc->observation,
            'calibration' =>$pc->calibration,
            'ip' =>$pc->ip,
            'waranty' =>$pc->waranty,
            'vendor' =>$pc->vendor,
            'photo' =>$pc->photo,
            'state' =>$pc->state,
            'order' =>$pc->order,
            'cost' =>$pc->cost,
            'waranty_end' =>$pc->waranty_end,
            'access_number' =>$pc->access_number,
            'amount' =>$pc->amount,
            'motive' =>Input::get('motive'),
            'created_at' =>$pc->created_at,
            'updated_at' =>$pc->updated_at,
            'user_id'           =>Auth::user()->id,

        );



        $pcHis=$this->pcHistoryRepo->newHistory();

        $managerHis = new PcHistoryManager($pcHis, $datahis);

         if($managerHis->save()){


             if($manager->save()){

                 $id=$manager->lastId();
                 if($oldphoto==$file->getClientOriginalName()){
                     $pc->photo = $oldphoto;
                 }else{
                     $i = 0;//indice para el while
                     //separamos el nombre de la img y la extensión
                     $extension=$file->guessClientExtension();
                     $extension=strtolower($extension);

                     if($extension=="jpg" || $extension=="gif" ||$extension=="png" ||$extension=="jpeg" ){

                         if($file->getClientSize()>2029979){

                             $messages =array('id' => $id,'size'=>'');
                             return Redirect::action('pc_detail',$messages)->withErrors($messages);

                         }else{
                             $info = explode(".",$file->getClientOriginalName());
                             //asignamos de nuevo el nombre de la imagen completo
                             $miImg = $file->getClientOriginalName();
                             //mientras el archivo exista iteramos y aumentamos i
                             while(file_exists('eq/'. $miImg)){
                                 $i++;
                                 $miImg = $info[0]."-".$i."".".".$info[1];
                             }
                             //guardamos la imagen con otro nombre ej foto(1).jpg || foto(2).jpg etc
                             $file->move("eq",$miImg);
                             //si ha cambiado el nombre de la foto por el original actualizamos el campo foto de la bd
                             $pc= $this->pcRepo->find($id);
                             $pc->photo = $miImg;
                             $pc->save();
                         }

                     }else{
                         $messages =array('id' => $id,'ext'=>'');
                         return Redirect::action('pc_detail',$messages)->withErrors($messages);
                     }


                 }

                 return Redirect::action('PcController@pc_detail', array('id' => $id) );
             }

         }



        return Redirect::back()->withErrors($manager->getErrors())->withInput();
    }


    function formato_pc(){
        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);
        $company=$this->company;


        $accesories= $this->accesoryxpcRepo->searhAll($id);
        $softwares= $this->softwarePcRepo->searhAll($id);
        $devices= $this->devicePcRepo->searhAll($id);

        $html =View::make('pcs/f_in_02', compact('pc','company','accesories','id','softwares','devices'))->render();

        return PDF::load(utf8_decode($html), 'A4', 'portrait')->show();

    }


    function formato_pc2(){
        $id=Input::get('id');
        $pc = $this->pcRepo->find($id);
        $company=$this->company;


        $accesories= $this->accesoryxpcRepo->searhAll($id);
        $softwares= $this->softwarePcRepo->searhAll($id);
        $devices= $this->devicePcRepo->searhAll($id);
        //return Response::json($accesories);
        $html =View::make('pcs/f_in_02', compact('pc','company','accesories','id','softwares','devices'))->render();
        //$html=$view->render();
        echo $html;
        //echo "wwwweeerere";
        //return PDF::load($html, 'A4', 'portrait')->show();
        //return View::make('pcs/f_in_02', compact('pc','company','accesories','id','softwares','devices'));
    }


} 
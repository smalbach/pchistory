@extends('companies/layout')


@section('content')



<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">

                <div id="main-pc">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Equipo: {{$pc->name}} </h3>

                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('eq/')}}/{{$pc->photo}}" data-src="holder.js/100%x180"   class="img-thumbnail">
                                    </a>
                                    <div id="errorimage" class="error"></div>
                                </div>
                                <div class="col-xs-6">

                                    @if(Auth::user()->type=='company')

                                        {{Form::open(['route'=>'pc_edit','method'=>'post'])}}
                                            {{ Field::hidden('id',$pc->id,['class'=>'none'])}}
                                            <button class="btn btn-info btn-xs" id="editar">
                                                Editar
                                            </button>
                                         {{ Form::close()}}

                                    @endif


                                    {{Form::open(['route'=>'formato_pc','method'=>'get'])}}
                                    {{ Field::hidden('id',$pc->id,['class'=>'none'])}}
                                    <button class="btn btn-success btn-xs" id="formato">
                                        Formato de calidad
                                    </button>
                                    {{ Form::close()}}


                                </div>

                                <table class="table table-bordered ">
                                    <tr class="warning">
                                        <td>Marca</td>
                                        <td>S. O.</td>
                                        <td>Nombre</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $pc->trademark->name }}</td>
                                        <td></td>
                                        <td>{{ $pc->name }}</td>

                                    </tr>
                                    <tr class="warning">
                                        <td>Tipo</td>
                                        <td>Codigo interno</td>
                                        <td>Ubicación</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $pc->type }}</td>
                                        <td>{{ $pc->internal_id }}</td>
                                        <td>{{ $pc->location->name }}</td>

                                    </tr>

                                    <tr class="warning">
                                        <td>Responsable</td>
                                        <td>Modelo</td>
                                        <td>Serial</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $pc->owner }}</td>
                                        <td>{{ $pc->model }}</td>
                                        <td>{{ $pc->serial }}</td>

                                    </tr>

                                    <tr class="warning">
                                        <td>Voltaje</td>
                                        <td>Freq. de mantenimiento</td>
                                        <td>Fecha Compra</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $pc->voltage }}</td>
                                        <td>{{ $pc->maintenance_freq }}</td>
                                        <td>{{ $pc->buy_date }}</td>

                                    </tr>
                                    <tr class="warning">
                                        <td>Ip</td>
                                        <td colspan="2">Calibracion</td>

                                    </tr>
                                    <tr>
                                        <td>
                                           {{ $pc->ip }}

                                        </td>
                                        <td colspan="2">{{ $pc->calibration }}</td>


                                    </tr>
                                    <tr class="warning">
                                        <td>Contraseña</td>
                                        <td>Observación</td>
                                        <td>state</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(Auth::user()->type=='company')
                                                {{ $pc->password }}
                                            @else
                                                No tiene permisos para ver
                                            @endif

                                        </td>
                                        <td>{{ $pc->observation }}</td>
                                        <td>{{ $pc->state }}</td>

                                    </tr>
                                    <tr class="warning">
                                        <td colspan="3">Tipo pc</td>

                                    </tr>
                                    <tr>
                                        <td colspan="3">{{ $pc->type_pc }}</td>


                                    </tr>





                                </table>

                            </div>







                        </div>

                    </div>
                </div>

            </div>



            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Características</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if(Auth::user()->type=='company')
                                <button id="ad_accesory" type="button" class="btn btn-info  btn-sm"><i class="glyphicon glyphicon-plus">Añadir</i></button>
                            @endif
                        </div>
                        <div class="row">
                            <div id="caracteristicas">



                                <table class="table table-striped table-responsive" id="data_accesory">
                                    <tr class="warning">
                                        <th>Id</th>
                                        <th>Dispositivo</th>
                                        <th>Capacidad</th>
                                        <th>Cantidad</th>
                                        <th>Unidad</th>
                                        <th>Descripción</th>


                                        <th></th>

                                    </tr>
                                    @foreach($accesories as $accesory)
                                    <tr>
                                        <td>{{$accesory->ap_id}}</td>
                                        <td>{{$accesory->name}}</td>
                                        <td>{{$accesory->capacity}}</td>
                                        <td>{{$accesory->value}}</td>
                                        <td>{{$accesory->unity}}</td>
                                        <td>{{$accesory->description}}</td>
                                        <td>
                                            <button class="btn btn-xs btn-danger" onclick="del_accesory('{{$accesory->ap_id}}')"><i class="glyphicon glyphicon-trash"></i></button>

                                        </td>

                                    </tr>



                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>







        </div>



        <div class="row hidden">

            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hardware Relacionado </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if(Auth::user()->type=='company')
                            <button id="ad_device" type="button" class="btn btn-info  btn-sm"><i class="glyphicon glyphicon-plus">Añadir</i></button>
                            @endif

                        </div>
                        <div class="row">
                            <div id="devices_data">



                                <table class="table table-striped table-responsive" id="data_software">
                                    <tr class="warning">
                                        <th>Id</th>
                                        <th>Dispositivo</th>
                                        <th>Tipo</th>
                                        <th>Descripción</th>
                                        <th></th>

                                    </tr>
                                    @foreach($devices as $device)
                                    <tr>
                                        <td>{{$device->ap_id}}</td>
                                        <td>{{$device->name}}</td>

                                        <td>{{$device->type}}</td>
                                        <td>{{$device->description}}</td>
                                        <td>
                                            <button class="btn btn-xs btn-danger" onclick="del_device('{{$device->ap_id}}')"><i class="glyphicon glyphicon-trash"></i></button>

                                        </td>

                                    </tr>



                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>





        </div>


        <div class="row">

            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Programas instalados (Solo CPU y similares)</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if(Auth::user()->type=='company')
                            <button id="ad_software" type="button" class="btn btn-info  btn-sm"><i class="glyphicon glyphicon-plus">Añadir</i></button>
                            @endif
                        </div>
                        <div class="row">
                            <div id="softwares_data">



                                <table class="table table-striped table-responsive" id="data_software">
                                    <tr class="warning">
                                        <th>Id</th>
                                        <th>Dispositivo</th>
                                        <th>Versión</th>

                                        <th>Descripción</th>
                                        <th></th>

                                    </tr>
                                    @foreach($softwares as $software)
                                    <tr>
                                        <td>{{$software->ap_id}}</td>
                                        <td>{{$software->name}}</td>
                                        <td>{{$software->version}}</td>

                                        <td>{{$software->description}}</td>
                                        <td>
                                            <button class="btn btn-xs btn-danger" onclick="del_software('{{$software->ap_id}}')"><i class="glyphicon glyphicon-trash"></i></button>

                                        </td>

                                    </tr>



                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Historial</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <button id="show_history" type="button" class="btn btn-info  btn-sm"><i class="glyphicon glyphicon-plus">Mostrar historial</i></button>
                        </div>
                        <div class="row">

                            <div id="history_pc">

                            </div>


                        </div>


                    </div>

                </div>




            </div>

        </div>





    </div>
</div>








<div id="dialog_add_accesory" title="Añadir dispositivo" >

    <div id="choose_accesory">

    {{  Form::open(['role'=>'form','id'=>'frm_accesory'   ]) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="col-lg-10">
                        {{ Field::text('accesory_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-2">
                        <button  id="searh_accesory" type="button"  class="btn btn-success btn-sm"  ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="btn_new_accesory" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_trademark">


            </div>



        </div>

    {{Form::close()}}
    </div>

    <div id="add_accesory_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_accesory_new'   ]) }}
        <h2>Añadir Nuevo dispositivo</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_accesory']) }}
                        {{ Field::text('description','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_description_accesory']) }}
                        {{ Field::text('capacity','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_capacity_accesory']) }}
                        {{ Field::text('unity','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_unity_accesory']) }}

                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_accesory" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}


    </div>
</div>




<div id="dialog_add_accesory_value" title="Añadir dispositivo" >
    {{  Form::open(['role'=>'form','id'=>'frm_accesory_value'   ]) }}

    <div class="row">

        {{Form::label('accesory',"Dispositivo",['class'=>'col-lg-12  control-label','id'=>'lbl_accesory'])}}
    </div>

    {{ Field::text('value','1',['class'=>'form-control','data-rule-required'=>'true']) }}

    {{ Field::text('description','',['class'=>'form-control']) }}

    {{ Field::hidden('accesory_id','',['class'=>'form-control','id'=>'accesory_id']) }}
    {{ Field::hidden('state','active',['class'=>'form-control']) }}
    {{ Field::hidden('pc_id',$id,['class'=>'form-control']) }}


    <div class="form-group">

        <div class="col-lg-8 col-lg-offset-2">
            <buttton type="submit"   class="btn btn-success" id="btn_add_accesory" >Guardar</buttton>
        </div>
    </div>

    {{Form::close()}}

</div>




<div id="dialog_add_software" title="Añadir Software" >

    <div id="choose_software">

        {{  Form::open(['role'=>'form','id'=>'frm_software'   ]) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="col-lg-10">
                        {{ Field::text('software_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-2">
                        <button  id="searh_software" type="button"  class="btn btn-success btn-sm"  ><i class="glyphicon glyphicon-search"></i></button>
                       <!-- <button type="button"  class="btn btn-info btn-sm" id="btn_new_software" ><i class="glyphicon glyphicon-plus"></i></button>-->
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_software">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_software_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_software_new'   ]) }}
        <h2>Añadir Nuevo Software</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_accesory']) }}
                        {{ Field::text('description','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_description_software']) }}
                        {{ Field::text('version','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_version_sotware']) }}


                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_software" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}


    </div>
</div>



<div id="dialog_add_software_value" title="Añadir software" >
    {{  Form::open(['role'=>'form','id'=>'frm_software_value'   ]) }}

    <div class="row">

        {{Form::label('sodtware',"Software",['class'=>'col-lg-12  control-label','id'=>'lbl_software'])}}
    </div>

    {{ Field::text('value','1',['class'=>'form-control','data-rule-required'=>'true']) }}

    {{ Field::text('description','',['class'=>'form-control']) }}

    {{ Field::hidden('software_id','',['class'=>'form-control','id'=>'software_id']) }}
    {{ Field::hidden('state','active',['class'=>'form-control']) }}
    {{ Field::hidden('pc_id',$id,['class'=>'form-control']) }}


    <div class="form-group">

        <div class="col-lg-8 col-lg-offset-2">
            <buttton type="submit"   class="btn btn-success" id="btn_add_software" >Guardar</buttton>
        </div>
    </div>

    {{Form::close()}}

</div>




<div id="dialog_delete" title="">

    <h4>¿Desea Eliminar este dispositivo?</h4>
    {{  Form::open(['role'=>'form','id'=>'frm_accesory_delete'   ]) }}

    {{ Field::hidden('accesory_del','',['class'=>'form-control','id'=>'accesory_del']) }}
    <div class="from-group">
        <div class="col-xs-3">
            <label for="">Motivo de la eliminacion</label>
        </div>
        <div class="col-xs-9">
            <textarea id="motive" name="motive" class="form-control" data-rule-required="true" placeholder="Escriva el motivo de la eliminacion"></textarea>
        </div>

    </div>

    {{Form::close()}}
    <button class="btn btn-danger" onclick="delete_accesory()">    Si    </button>
    <button class="btn btn-success" onclick="$('#dialog_delete').dialog('close')" >    No    </button>


</div>






<div id="dialog_delete_soft" title="">

    <h4>¿Desea Eliminar este programa?</h4>
    {{  Form::open(['role'=>'form','id'=>'frm_software_delete'   ]) }}

    {{ Field::hidden('software_del','',['class'=>'form-control','id'=>'software_del']) }}
    <div class="from-group">
        <div class="col-xs-3">
            <label for="">Motivo de la eliminacion</label>
        </div>
        <div class="col-xs-9">
            <textarea id="motive_soft" name="motive" class="form-control" data-rule-required="true" placeholder="Escriva el motivo de la eliminacion"></textarea>
        </div>

    </div>

    {{Form::close()}}
    <button class="btn btn-danger" onclick="delete_software()">    Si    </button>
    <button class="btn btn-success" onclick="$('#dialog_delete_soft').dialog('close')" >    No    </button>


</div>





<div id="dialog_add_device" title="Añadir Dispositivo" >

    <div id="choose_device">

        {{  Form::open(['role'=>'form','id'=>'frm_device'   ]) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="col-lg-10">
                        {{ Field::text('device_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-2">
                        <button  id="searh_device" type="button"  class="btn btn-success btn-sm"  ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="btn_new_device" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_device">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_device_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_device_new'   ]) }}
        <h2>Añadir Nuevo Dispositivo</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_accesory']) }}
                        {{ Field::text('description','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_description_device']) }}



                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_device" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}


    </div>
</div>



<div id="dialog_add_device_value" title="Añadir Dispositivo" >
    {{  Form::open(['role'=>'form','id'=>'frm_device_value'   ]) }}

    <div class="row">

        {{Form::label('device',"Device",['class'=>'col-lg-12  control-label','id'=>'lbl_device'])}}
    </div>

    {{ Field::text('value','1',['class'=>'form-control','data-rule-required'=>'true']) }}

    {{ Field::text('description','',['class'=>'form-control']) }}
    <div class="form-group">


        <div class="col-lg-2  control-label">
            <label for="description">Tipo</label>
        </div>

        <div class="col-lg-10">
            <select name="type" class="form-control" >
                <option value="Instalada">Instalada</option>
                <option value="En red">En red</option>
            </select>


        </div>


    </div>


    {{ Field::hidden('device_id','',['class'=>'form-control','id'=>'device_id']) }}
    {{ Field::hidden('state','active',['class'=>'form-control']) }}
    {{ Field::hidden('pc_id',$id,['class'=>'form-control']) }}


    <div class="form-group">

        <div class="col-lg-8 col-lg-offset-2">
            <buttton type="submit"   class="btn btn-success" id="btn_add_device" >Guardar</buttton>
        </div>
    </div>

    {{Form::close()}}

</div>



<div id="dialog_delete_device" title="">

    <h4>¿Desea Eliminar este Dispositivo?</h4>
    {{  Form::open(['role'=>'form','id'=>'frm_device_delete'   ]) }}

    {{ Field::hidden('device_del','',['class'=>'form-control','id'=>'device_del']) }}
    <div class="from-group">
        <div class="col-xs-3">
            <label for="">Motivo de la eliminacion</label>
        </div>
        <div class="col-xs-9">
            <textarea id="motive_soft" name="motive" class="form-control" data-rule-required="true" placeholder="Escriva el motivo de la eliminacion"></textarea>
        </div>

    </div>

    {{Form::close()}}
    <button class="btn btn-danger" onclick="delete_device()">    Si    </button>
    <button class="btn btn-success" onclick="$('#dialog_delete_soft').dialog('close')" >    No    </button>


</div>

















<script>

    var screenwidth=screen.width-200;
    var screenheight=screen.height-350;





    $(document).ready(function(){
        url=document.URL;
        var res = url.split("&");

        if(res[1]=="size="){
          $("#errorimage").html("Error: El tamaño de la imagen fue mur grande")
        }else if(res[1]=="ext="){
            $("#errorimage").html("Error: Debe seleccionar una imagen valida")
        }

        setDialog('dialog_add_accesory')
        setDialog2('dialog_add_accesory_value')

        setDialog('dialog_add_software')
        setDialog2('dialog_add_software_value')

        setDialog('dialog_add_device')
        setDialog2('dialog_add_device_value')


        /*accesory*/

        $("#ad_accesory").click(function(){
            hide_frm('choose_accesory','add_accesory_form')
            $("#dialog_add_accesory").dialog('open')

        })


        $("#searh_accesory").click(function(){
            table_active='searh_accesory'
            searh_accesory();
        })

        $("#btn_add_accesory").click(function(){
            add_accesory();
        })

        $("#frm_accesory_value").validate();


        /*Software*/


        $("#ad_software").click(function(){
            hide_frm('choose_software','add_software_form')
            $("#dialog_add_software").dialog('open')

        })


        $("#searh_software").click(function(){
            table_active='searh_software'
            searh_software();
        })

        $("#btn_add_software").click(function(){
            add_software();
        })

        $("#frm_software_value").validate();



        $("#accesory_del").validate();


        $("#show_history").click(function(){
            search_history()
        })




        $("#btn_new_accesory").click(function(){
            hide_frm('add_accesory_form','choose_accesory')
        })


        $("#cancel_add_accesory").click(function(){
            hide_frm('choose_accesory','add_accesory_form')
        })


        $("#frm_accesory_new").validate({
            submitHandler: function(form){
                save_accesory()
            }
        })




        /*
        *
        * Software
        * */
        $("#software_del").validate();


        $("#btn_new_software").click(function(){
            hide_frm('add_software_form','choose_software')
        })


        $("#cancel_add_software").click(function(){
            hide_frm('choose_software','add_software_form')
        })


        $("#frm_software_new").validate({
            submitHandler: function(form){
                save_software()
            }
        })


        /*
         *
         * Device
         * */

        $("#btn_add_device").click(function(){
            add_device();
        })

        $("#searh_device").click(function(){

            table_active='searh_device'
            searh_device();
        })


        $("#ad_device").click(function(){
            //alert("click")
            hide_frm('choose_device','add_device_form')
            $("#dialog_add_device").dialog('open')
            $("#dialog_add_device").dialog('open')

        })


        $("#device_del").validate();


        $("#btn_new_device").click(function(){
            hide_frm('add_device_form','choose_device')
        })


        $("#cancel_add_device").click(function(){
            hide_frm('choose_device','add_device_form')
        })


        $("#frm_device_new").validate({
            submitHandler: function(form){
                save_device()
            }
        })



        $("#dialog_delete").dialog({
            autoOpen:false,
            modal: true,
            width: 520,
            height: 260,
            position: { my: "center", at: "center top" },
            show: {
                effect: "blind",
                duration: 300
            },
            hide: {
                effect: "fade",
                duration: 300
            },
            closeOnEscape: false,
            open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); }
        })
        $("#dialog_delete_soft").dialog({
            autoOpen:false,
            modal: true,
            width: 520,
            height: 260,
            position: { my: "center", at: "center top" },
            show: {
                effect: "blind",
                duration: 300
            },
            hide: {
                effect: "fade",
                duration: 300
            },
            closeOnEscape: false,
            open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); }
        })

        $("#dialog_delete_device").dialog({
            autoOpen:false,
            modal: true,
            width: 520,
            height: 260,
            position: { my: "center", at: "center top" },
            show: {
                effect: "blind",
                duration: 300
            },
            hide: {
                effect: "fade",
                duration: 300
            },
            closeOnEscape: false,
            open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); }
        })

    })





    function save_accesory(){


        formData=$("#frm_accesory_new").serialize();

        $.ajax({
            url: '{{ route('accesory_save') }}',
            type: 'POST',
            data: formData,



            success: function(data){
                if(data!="error"){

                    $("#dialog_add_accesory_value").dialog("open")
                    $("#accesory_id").val(data)
                    $("#lbl_accesory").text($("#frm_name_accesory").val())
                    $("#dialog_add_accesory").dialog("close")

                    $("#frm_accesory_new").each (function(){ this.reset()});

                }else{
                    alert("Error al guardar ")
                }

            },
            error: function(){

            }
        });

    }




    function searh_accesory(){


        formData=$("#frm_accesory").serialize();
        set_loader('tbl_trademark');
        $.ajax({
            url: '{{ route('accesory_search') }}',
            type: 'POST',
            data: formData,
            dataType:'json',


            success: function(data){

                set_table(data,'tbl_trademark')
            },
            error: function(){

            }
        });

    }



    function setDialog2(id){

        $("#"+id).dialog({
            autoOpen:false,
            modal: true,
            width: 600,
            position: { my: "center", at: "center top" },
            height: 400,
            buttons: {


                Cancelar: function() {
                    $( this ).dialog( "close" );

                }
            },
            show: {
                effect: "blind",
                duration: 300
            },
            hide: {
                effect: "fade",
                duration: 300
            },
            closeOnEscape: false,
            open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); }
        })
    }


    function add_accesory(){


        dataString=$("#frm_accesory_value").serialize();

        $.ajax({
            type: "POST",
            url:'{{route('add_pc_accesory')}}',
            data: dataString,


            dataType: 'json',
            success: function(data){
                ;
                 if(data){
                     load_caracteristicas();
                     $("#dialog_add_accesory_value").dialog( "close" );
                 }else{
                    alert("Error debe registrar la cantidad");
                 }


            },
            error: function(data){


            }

        });

     }


    function load_caracteristicas(){

        dataString=$("#frm_accesory_value").serialize();
       // alert("Cargand")
        set_loader('caracteristicas');
        $.ajax({
            type: "GET",
            url:'{{route('show_pc_accesory')}}',
            data: dataString,
            dataType: 'json',
            success: function(data){
                //alert(data)
                set_table_accesory(data,'caracteristicas')

            },
            error: function(data){


            }

        });

    }


    function search_history(){

        dataString=$("#frm_accesory_value").serialize();

        $.ajax({
            type: "POST",
            url:'{{route('show_pc_history')}}',
            data: dataString,
            success: function(data){
                $("#history_pc").html(data)
            },
            error: function(data){


            }

        });

    }


    function set_table_accesory(data,div){
        //alert("wiii");
        if(!data){
            data="Sin resultados"
            $("#"+div).html(data)
        }else{


            keys=data.reduce(function(keys, element){
                for (key in element) {
                    keys.push(key);
                }
                return keys;
            },[]);

            //keys=keys.split(",")

            Array.prototype.unique=function(a){
                return function(){return this.filter(a)}}(function(a,b,c){return c.indexOf(a,b+1)<0
            });


            th ='<thead><tr class="warning">'
            th+='<th>Id</th>'
            th+='<th>Dispositivo</th>'
            th+='<th>Capacidad</th>'
            th+='<th>Cantidad</th>'
            th+='<th>Unidad</th>'
            th+='<th>Descripción</th>'
            th+='<th></th></tr></thead>'



            td="<tbody>"
            $.each(data, function(index,element) {
                appid="";
                td+="<tr onclick='sel_table(this)'>"
                $.each(element,function(index2,element2){

                    td+="<td data='"+index2+"'>"+element2+"</td>"
                    if(index2=="ap_id") appid=element2

                })
                btn='<td><button class="btn btn-xs btn-danger"  onclick="del_accesory(\''+appid+'\')"><i class="glyphicon glyphicon-trash"></i></button></td>'

                td+=btn+"</tr>"

            });
            td+="</tbody>"
            table="<table class='table table-striped'>"
            table+=th+td+"</table>"
            //alert(table)
            $("#"+div).html(table)
        }
    }

    function del_accesory(id){

        $("#accesory_del").val(id)
        $("#dialog_delete").dialog("open")

    }

    function delete_accesory(){
        if($("#motive").val()!=""){
            dataString=$("#frm_accesory_delete").serialize();

            $.ajax({
                type: "POST",
                url:'{{route('delete_pc_accesory')}}',
                data: dataString,

                success: function(data){
                    load_caracteristicas()
                    $('#dialog_delete').dialog('close');
                },
                error: function(data){


                }

            });

        }else{
            alert("Debe Escribir el motivo de la eliminacion");
        }


    }


    /*Softwares*/




    function save_software(){


        formData=$("#frm_software_new").serialize();

        $.ajax({
            url: '{{ route('software_save') }}',
            type: 'POST',
            data: formData,



            success: function(data){
                if(data!="error"){

                    $("#dialog_add_software_value").dialog("open")
                    $("#software_id").val(data)
                    $("#lbl_software").text($("#frm_name_software").val())
                    $("#dialog_add_software").dialog("close")

                    $("#frm_software_new").each (function(){ this.reset()});

                }else{
                    alert("Error al guardar ")
                }

            },
            error: function(){

            }
        });

    }




    function searh_software(){


        formData=$("#frm_software").serialize();
        set_loader('tbl_software');
        $.ajax({
            url: '{{ route('software_search') }}',
            type: 'POST',
            data: formData,
            dataType:'json',


            success: function(data){

                set_table(data,'tbl_software')
            },
            error: function(){

            }
        });

    }


    function add_software(){


        dataString=$("#frm_software_value").serialize();

        $.ajax({
            type: "POST",
            url:'{{route('add_pc_software')}}',
            data: dataString,


            dataType: 'json',
            success: function(data){
                ;
                if(data){
                    load_software();
                    $("#dialog_add_software_value").dialog( "close" );
                }else{
                    alert("Error debe registrar la cantidad");
                }


            },
            error: function(data){


            }

        });

    }


    function load_software(){

        dataString=$("#frm_software_value").serialize();
        // alert("Cargand")
        set_loader('softwares_data');
        $.ajax({
            type: "GET",
            url:'{{route('show_pc_software')}}',
            data: dataString,
            dataType: 'json',
            success: function(data){
                //alert(data)
                set_table_software(data,'softwares_data')

            },
            error: function(data){


            }

        });

    }


    /*Devices*/




    function save_device(){


        formData=$("#frm_device_new").serialize();

        $.ajax({
            url: '{{ route('device_save') }}',
            type: 'POST',
            data: formData,



            success: function(data){
                if(data!="error"){

                    $("#dialog_add_device_value").dialog("open")
                    $("#device_id").val(data)
                    $("#lbl_device").text($("#frm_name_device").val())
                    $("#dialog_add_device").dialog("close")

                    $("#frm_device_new").each (function(){ this.reset()});

                }else{
                    alert("Error al guardar ")
                }

            },
            error: function(){

            }
        });

    }




    function searh_device(){


        formData=$("#frm_device").serialize();
        set_loader('tbl_device');
        $.ajax({
            url: '{{ route('device_search') }}',
            type: 'POST',
            data: formData,
            dataType:'json',


            success: function(data){

                set_table(data,'tbl_device')
            },
            error: function(){

            }
        });

    }


    function add_device(){


        dataString=$("#frm_device_value").serialize();

        $.ajax({
            type: "POST",
            url:'{{route('add_pc_device')}}',
            data: dataString,


            dataType: 'json',
            success: function(data){
                ;
                if(data){
                    load_device();
                    $("#dialog_add_device_value").dialog( "close" );
                }else{
                    alert("Error debe registrar la cantidad");
                }


            },
            error: function(data){


            }

        });

    }


    function load_device(){

        dataString=$("#frm_device_value").serialize();
        // alert("Cargand")
        set_loader('devices_data');
        $.ajax({
            type: "GET",
            url:'{{route('show_pc_device')}}',
            data: dataString,
            dataType: 'json',
            success: function(data){
                //alert(data)
                set_table_device(data,'devices_data')

            },
            error: function(data){


            }

        });

    }



    function search_history(){

        dataString=$("#frm_software_value").serialize();

        $.ajax({
            type: "POST",
            url:'{{route('show_pc_history')}}',
            data: dataString,
            success: function(data){
                $("#history_pc").html(data)
            },
            error: function(data){


            }

        });

    }


    function set_table_software(data,div){
        //alert("wiii");
        if(!data){
            data="Sin resultados"
            $("#"+div).html(data)
        }else{


            keys=data.reduce(function(keys, element){
                for (key in element) {
                    keys.push(key);
                }
                return keys;
            },[]);

            //keys=keys.split(",")

            Array.prototype.unique=function(a){
                return function(){return this.filter(a)}}(function(a,b,c){return c.indexOf(a,b+1)<0
            });


            th ='<thead><tr class="warning">'
            th+='<th>Id</th>'
            th+='<th>Programa</th>'
            th+='<th>version</th>'
            th+='<th>Descripción</th>'
            th+='<th></th></tr></thead>'



            td="<tbody>"
            $.each(data, function(index,element) {
                appid="";
                td+="<tr onclick='sel_table(this)'>"
                $.each(element,function(index2,element2){

                    td+="<td data='"+index2+"'>"+element2+"</td>"
                    if(index2=="ap_id") appid=element2

                })
                btn='<td><button class="btn btn-xs btn-danger"  onclick="del_software(\''+appid+'\')"><i class="glyphicon glyphicon-trash"></i></button></td>'

                td+=btn+"</tr>"

            });
            td+="</tbody>"
            table="<table class='table table-striped'>"
            table+=th+td+"</table>"
            //alert(table)
            $("#"+div).html(table)
        }
    }




    function set_table_device(data,div){
        //alert("wiii");
        if(!data){
            data="Sin resultados"
            $("#"+div).html(data)
        }else{


            keys=data.reduce(function(keys, element){
                for (key in element) {
                    keys.push(key);
                }
                return keys;
            },[]);

            //keys=keys.split(",")

            Array.prototype.unique=function(a){
                return function(){return this.filter(a)}}(function(a,b,c){return c.indexOf(a,b+1)<0
            });


            th ='<thead><tr class="warning">'
            th+='<th>Id</th>'
            th+='<th>Dispositivo</th>'
            th+='<th>Tipo</th>'
            th+='<th>Descripción</th>'
            th+='<th></th></tr></thead>'



            td="<tbody>"
            $.each(data, function(index,element) {
                appid="";
                td+="<tr onclick='sel_table(this)'>"
                $.each(element,function(index2,element2){

                    td+="<td data='"+index2+"'>"+element2+"</td>"
                    if(index2=="ap_id") appid=element2

                })
                btn='<td><button class="btn btn-xs btn-danger"  onclick="del_device(\''+appid+'\')"><i class="glyphicon glyphicon-trash"></i></button></td>'

                td+=btn+"</tr>"

            });
            td+="</tbody>"
            table="<table class='table table-striped'>"
            table+=th+td+"</table>"
            //alert(table)
            $("#"+div).html(table)
        }
    }


    function del_software(id){

        $("#software_del").val(id)
        $("#dialog_delete_soft").dialog("open")

    }


    function del_device(id){

        $("#device_del").val(id)
        $("#dialog_delete_device").dialog("open")

    }


    function delete_device(){
        if($("#motive_device").val()!=""){
            dataString=$("#frm_device_delete").serialize();

            $.ajax({
                type: "POST",
                url:'{{route('delete_pc_device')}}',
                data: dataString,

                success: function(data){
                    load_device()
                    $('#dialog_delete_device').dialog('close');
                },
                error: function(data){


                }

            });

        }else{
            alert("Debe Escribir el motivo de la eliminacion");
        }


    }



    function delete_software(){
        if($("#motive_soft").val()!=""){
            dataString=$("#frm_software_delete").serialize();

            $.ajax({
                type: "POST",
                url:'{{route('delete_pc_software')}}',
                data: dataString,

                success: function(data){
                    load_software()
                    $('#dialog_delete_soft').dialog('close');
                },
                error: function(data){


                }

            });

        }else{
            alert("Debe Escribir el motivo de la eliminacion");
        }


    }




</script>





@stop



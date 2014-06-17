@extends('companies/layout')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">

                <div id="main-pc">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">PC: {{$pc->name}} </h3>

                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="http://aikon.co/img/aikon.png" data-src="holder.js/100%x180"   class="img-thumbnail">
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    {{Form::open(['route'=>'pc_edit','method'=>'post'])}}
                                        {{ Field::hidden('id',$pc->id,['class'=>'none'])}}
                                        <button class="btn btn-info btn-xs" id="editar">
                                            Editar
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
                                        <td>{{ $pc->so->name." ".$pc->so->version }}</td>
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
                                        <td>{{ $pc->location }}</td>

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
                                        <td>Fecha de mantenimiento</td>
                                        <td>Fecha Compra</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $pc->voltage }}</td>
                                        <td>{{ $pc->maintenance_day }}</td>
                                        <td>{{ $pc->buy_date }}</td>

                                    </tr>
                                    <tr class="warning">
                                        <td>Contraseña</td>
                                        <td>Observación</td>
                                        <td>state</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $pc->password }}</td>
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


            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Características</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <button id="ad_accesory" type="button" class="btn btn-info  btn-sm"><i class="glyphicon glyphicon-plus">Añadir</i></button>
                        </div>
                        <div class="row">
                            <div id="caracteristicas">



                                <table class="table table-striped" id="data_accesory">
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

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-warning">
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


















<script>

    var screenwidth=screen.width-200;
    var screenheight=screen.height-350;





    $(document).ready(function(){

        setDialog('dialog_add_accesory')
        setDialog2('dialog_add_accesory_value')


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


        $(".delete").click(function(){
           // alert("wiii");
        })


        $("#dialog_delete").dialog({
            autoOpen:false,
            modal: true,
            width: 520,
            height: 260,
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
            alert("Deve Escribir el motivo de la eliminacion");
        }


    }



</script>





@stop



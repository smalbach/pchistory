@extends('companies/layout')


@section('content')

@foreach($pcs as $pc)

<div class="row">

    {{  Form::open(['route'=>'pc_update','method'=>'POST','role'=>'form','class'=>'form-horizontal','files' => true,'id'=>'form_pc'   ]) }}
    <fieldset>
        <legend>Editar Equipo</legend>

        <div class="col-lg-6">

            {{ Field::text('id',$pc->id,['readonly'=>'readonly','class'=>'form-control','id'=>'id','data-rule-required'=>'true']) }}

            {{ Field::text('trademark',$pc->trademark,['readonly'=>'readonly','class'=>'form-control','id'=>'trademark','data-rule-required'=>'true','placeholder'=>'Click para agregar marca']) }}
            {{ Field::hidden('trademark_id',$pc->trademark_id,['id'=>'id_trademark']) }}




            {{ Field::text('type',$pc->type,['readonly'=>'readonly','class'=>'form-control','id'=>'type','data-rule-required'=>'true','placeholder'=>'Click para agregar Tipo']) }}
            {{ Field::hidden('type_id',$pc->type_id,['id'=>'type_id']) }}


            {{ Field::text('location',$pc->location,['readonly'=>'readonly','class'=>'form-control','id'=>'location','data-rule-required'=>'true','placeholder'=>'Click para agregar Ubicaciónn']) }}
            {{ Field::hidden('location_id',$pc->location_id,['id'=>'location_id']) }}


            {{ Field::text('owner',$pc->owner,['readonly'=>'readonly','class'=>'form-control','id'=>'owner','data-rule-required'=>'true','placeholder'=>'Click para agregar Responsable']) }}
            {{ Field::hidden('owner_id',$pc->owner_id,['id'=>'owner_id']) }}


            {{ Field::text('active_type',$pc->active_type,['readonly'=>'readonly','class'=>'form-control','id'=>'active_type','data-rule-required'=>'true','placeholder'=>'Click para agregar tipo activo']) }}
            {{ Field::hidden('active_type_id',$pc->active_type_id,['id'=>'active_type_id']) }}






            {{ Field::text('name',$pc->name,['class'=>'form-control','data-rule-required'=>'true']) }}


            {{ Field::text('internal_id',$pc->internal_id,['class'=>'form-control']) }}


            {{ Field::text('model',$pc->model,['class'=>'form-control']) }}

            {{ Field::text('calibration',$pc->calibration,['class'=>'form-control']) }}

            {{ Field::text('access_number',$pc->access_number,['class'=>'form-control']) }}

            {{ Field::text('amount',$pc->amount,['class'=>'form-control']) }}

            {{ Field::text('serial',$pc->serial,['class'=>'form-control']) }}



        </div>
        <div class="col-lg-6">




            {{ Field::text('voltage',$pc->voltage,['class'=>'form-control']) }}

            {{ Field::text('maintenance_freq',$pc->maintenance_freq,['class'=>'form-control','id'=>'maintenance_freq']) }}

            {{ Field::text('buy_date',$pc->buy_date,['class'=>'form-control','id'=>'buy_date']) }}

            {{ Field::text('password',$pc->password,['class'=>'form-control']) }}

            {{ Field::text('ip',$pc->ip,['class'=>'form-control']) }}

            {{ Field::text('waranty',$pc->waranty,['class'=>'form-control']) }}

            {{ Field::text('waranty_end',$pc->waranty_end,['class'=>'form-control','id'=>'waranty_end']) }}



            {{ Field::textarea('observation',$pc->observation,['class'=>'form-control']) }}


            {{ Field::text('vendor',$pc->vendor,['class'=>'form-control']) }}


            {{ Field::hidden('photo',$pc->photo,['id'=>'photoname']) }}


            <div class="form-group">
                <div class="col-lg-2  control-label">
                    <label for="photo">Foto</label>    </div>
                <div class="col-lg-10">
                    <input class="form-control" name="oldphoto" value="{{$pc->photo}}" type="file">    </div>
            </div>



            {{ Field::text('state',$pc->state,['class'=>'form-control']) }}

            {{ Field::hidden('order',$pc->order,['class'=>'form-control']) }}

            <div class="form-group">

                <div class="col-lg-2">
                    <label for="" class="">Motivo de la actualizacion</label>
                </div>
                <div class="col-lg-10" >
                    <textarea class="form-control" name="motive" id="motive"  data-rule-required="true"></textarea>

                </div>

            </div>

        </div>


        <div class="form-group">
            <div class="col-lg-12">

                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>




    </fieldset>



    {{Form::close()}}




</div>
</div>



@endforeach

<div id="dialog_trademark" title="Buscar Marca" >
    <div id="choose_trademark">

        {{  Form::open(['role'=>'form','id'=>'frm_trademark'   ]) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('trademark_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_trademark()" ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="add_tradmark" ><i class="glyphicon glyphicon-plus"></i></button>
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

    <!--############## form - add - trademark  ###############-->

    <div id="add_trademark_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_trademark_add'   ]) }}
        <h2>Añadir nueva marca</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_trademark']) }}
                        {{ Field::text('description','',['class'=>'form-control']) }}

                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_trademark" >Cancelar</button>

                        </div>
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



</div>


</div>



<div id="dialog_operative_system" title="Buscar Sistema operativo" >

    <div id="choose_so">


        {{  Form::open(['role'=>'form','id'=>'frm_so']) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('so_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_so()" ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="add_so" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_so">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_so_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_so_add'   ]) }}
        <h2>Añadir Nuevo Sistema operativo</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_so']) }}
                        {{ Field::text('version','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_version_so']) }}

                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_so" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}

    </div>

</div>




<!--############## form - add - types  ###############-->

<div id="dialog_type" title="Buscar Tipos" >

    <div id="choose_type">


        {{  Form::open(['role'=>'form','id'=>'frm_type']) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('type_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_type()" ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="add_type" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_type">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_type_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_type_add'   ]) }}
        <h2>Añadir Nuevo Tipo</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_type']) }}
                        {{ Field::text('description','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_description_type']) }}

                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_type" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}

    </div>

</div>





<!--############## form - add - location  ###############-->

<div id="dialog_location" title="Buscar Ubicaciones" >

    <div id="choose_location">


        {{  Form::open(['role'=>'form','id'=>'frm_location']) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('location_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_location()" ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="add_location" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_location">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_location_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_location_add'   ]) }}
        <h2>Añadir Nuevo Ubicacion</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_location']) }}
                        {{ Field::text('floor','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_floor_location']) }}

                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_type" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}

    </div>

</div>



<!--############## form - add - owner  ###############-->

<div id="dialog_owner" title="Buscar Responsables" >

    <div id="choose_owner">


        {{  Form::open(['role'=>'form','id'=>'frm_owner']) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('owner_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_owner()" ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="add_owner" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_owner">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_owner_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_owner_add'   ]) }}
        <h2>Añadir Nuevo Usuario</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('full_name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_full_name_owner']) }}
                        {{ Field::text('email','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_email_owner']) }}


                    </div>
                    <div class="col-lg-8">

                        {{ Field::text('password','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_password_owner']) }}
                        {{ Field::hidden('type','company',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_floor_owner']) }}

                    </div>


                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_owner" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}

    </div>

</div>





<!--############## form - add - active_type  ###############-->

<div id="dialog_active_type" title="Buscar tipos de activo" >

    <div id="choose_active_type">


        {{  Form::open(['role'=>'form','id'=>'frm_active_type']) }}


        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('active_type_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_active_type()" ><i class="glyphicon glyphicon-search"></i></button>
                        <button type="button"  class="btn btn-info btn-sm" id="add_active_type" ><i class="glyphicon glyphicon-plus"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_active_type">


            </div>



        </div>

        {{Form::close()}}
    </div>

    <div id="add_active_type_form" style="display: none">

        {{  Form::open(['role'=>'form','id'=>'frm_active_type_add'   ]) }}
        <h2>Añadir Nuevo tipo de activo</h2>

        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_name_active_type']) }}
                        {{ Field::text('description','',['class'=>'form-control','data-rule-required'=>'true','id'=>'frm_description_active_type']) }}

                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">

                            <button type="submit" class="btn btn-info btn-xs" >Guardar</button>
                            <button type="button" class="btn btn-xs" id="cancel_add_active_type" >Cancelar</button>

                        </div>
                    </div>



                </div>


            </div>
        </div>






        {{Form::close()}}

    </div>

</div>





<script>

$(document).ready(function(){

    setDialog('dialog_trademark')
    setDialog('dialog_operative_system')
    setDialog('dialog_type')
    setDialog('dialog_location')
    setDialog('dialog_owner')
    setDialog('dialog_active_type')



    $("#trademark").on('click', function(){
        hide_frm('choose_trademark','add_trademark_form')
        table_active="trademark"
        $("#dialog_trademark").dialog('open');

    });

    $("#operative_system").on('click', function(){
        hide_frm('choose_so','add_so_form')
        table_active="operative_system"
        $("#dialog_operative_system").dialog('open');

    });

    $("#type").on('click', function(){
        hide_frm('choose_type','add_type_form')
        table_active="type"
        $("#dialog_type").dialog('open');

    });


    $("#location").on('click', function(){
        hide_frm('choose_location','add_location_form')
        table_active="location"
        $("#dialog_location").dialog('open');

    });

    $("#owner").on('click', function(){
        hide_frm('choose_owner','add_owner_form')
        table_active="owner"
        $("#dialog_owner").dialog('open');

    });

    $("#active_type").on('click', function(){
        hide_frm('choose_active_type','add_active_type_form')
        table_active="active_type"
        $("#dialog_active_type").dialog('open');

    });






    $("#buy_date").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:+nn",
        dateFormat: "yy/mm/dd",
    });

    $("#waranty_end").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1980:2050",
        dateFormat: "yy/mm/dd",
    });



    $("#form_pc").validate()

    $("#add_tradmark").click(function(){
        show_frm('add_trademark_form','choose_trademark')

    })


    $("#cancel_add_so").click(function(){
        hide_frm('choose_so','add_so_form')
    })
    $("#add_so").click(function(){
        show_frm('add_so_form','choose_so')

    })


    $("#cancel_add_type").click(function(){
        hide_frm('choose_type','add_type_form')
    })
    $("#add_type").click(function(){
        show_frm('add_type_form','choose_type')

    })



    $("#cancel_add_location").click(function(){
        hide_frm('choose_location','add_location_form')
    })
    $("#add_location").click(function(){
        show_frm('add_location_form','choose_location')

    })


    $("#cancel_add_owner").click(function(){
        hide_frm('choose_owner','add_owner_form')
    })
    $("#add_owner").click(function(){
        show_frm('add_owner_form','choose_owner')

    })


    $("#cancel_add_active_type").click(function(){
        hide_frm('choose_active_type','add_active_type_form')
    })

    $("#add_active_type").click(function(){
        show_frm('add_active_type_form','choose_active_type')

    })



    $("#cancel_add_trademark").click(function(){
        hide_frm('choose_trademark','add_trademark_form')
    })


    $("#frm_trademark_add").validate({
        submitHandler: function(form){
            save_trademark()
        }
    })


    $("#frm_so_add").validate({
        submitHandler: function(form){
            save_so()
        }
    })

    $("#frm_type_add").validate({
        submitHandler: function(form){
            save_type()
        }
    })


    $("#frm_location_add").validate({
        submitHandler: function(form){
            save_location()
        }
    })


    $("#frm_owner_add").validate({
        submitHandler: function(form){
            save_owner()
        }
    })


    $("#frm_active_type_add").validate({
        submitHandler: function(form){
            save_active_type()
        }
    })





});





function save_trademark(){


    formData=$("#frm_trademark_add").serialize();

    $.ajax({
        url: '{{ route('trademark_save') }}',
        type: 'POST',
        data: formData,


        success: function(data){
            if(data!="error"){
                $("#dialog_trademark").dialog("close")
                $("#id_trademark").val(data)
                $("#trademark").val($("#frm_name_trademark").val())
                $("#frm_trademark_add").each (function(){ this.reset()});

            }else{
                alert("Error al guardar ")
            }

        },
        error: function(){

        }
    });

}



function save_so(){


    formData=$("#frm_so_add").serialize();

    $.ajax({
        url: '{{ route('so_save') }}',
        type: 'POST',
        data: formData,



        success: function(data){
            if(data!="error"){
                $("#dialog_operative_system").dialog("close")
                $("#id_operative_system").val(data)
                $("#operative_system").val($("#frm_name_so").val()+" "+$("#frm_version_so").val())
                $("#frm_so_add").each (function(){ this.reset()});

            }else{
                alert("Error al guardar ")
            }

        },
        error: function(){

        }
    });

}


function save_type(){


    formData=$("#frm_type_add").serialize();

    $.ajax({
        url: '{{ route('type_save') }}',
        type: 'POST',
        data: formData,
        success: function(data){
            if(data!="error"){
                $("#dialog_type").dialog("close")
                $("#id_type").val(data)
                $("#type").val($("#frm_name_type").val()+" "+$("#frm_description_type").val())
                $("#frm_type_add").each (function(){ this.reset()});

            }else{
                alert("Error al guardar ")
            }

        },
        error: function(){

        }
    });

}

function save_location(){


    formData=$("#frm_location_add").serialize();

    $.ajax({
        url: '{{ route('location_save') }}',
        type: 'POST',
        data: formData,
        success: function(data){
            if(data!="error"){
                $("#dialog_location").dialog("close")
                $("#location_id").val(data)
                $("#location").val($("#frm_name_location").val()+" "+$("#frm_floor_location").val())
                $("#frm_location_add").each (function(){ this.reset()});

            }else{
                alert("Error al guardar ")
            }

        },
        error: function(){

        }
    });

}

function save_owner(){


    formData=$("#frm_owner_add").serialize();

    $.ajax({
        url: '{{ route('owner_save') }}',
        type: 'POST',
        data: formData,
        success: function(data){
            if(data!="error"){
                $("#dialog_owner").dialog("close")
                $("#owner_id").val(data)
                $("#owner").val($("#frm_full_name_owner").val()+" "+$("#frm_email_owner").val())
                $("#frm_owner_add").each (function(){ this.reset()});

            }else{
                alert("Error al guardar ")
            }

        },
        error: function(){

        }
    });

}

function save_active_type(){


    formData=$("#frm_active_type_add").serialize();

    $.ajax({
        url: '{{ route('active_type_save') }}',
        type: 'POST',
        data: formData,
        success: function(data){
            if(data!="error"){
                $("#dialog_active_type").dialog("close")
                $("#active_type_id").val(data)
                $("#active_type").val($("#frm_name_active_type").val()+" "+$("#frm_description_active_type").val())
                $("#frm_active_type_add").each (function(){ this.reset()});

            }else{
                alert("Error al guardar ")
            }

        },
        error: function(){

        }
    });

}



function search_trademark(){



    set_loader('tbl_trademark');
    formData=$("#frm_trademark").serialize();

    $.ajax({
        url: '{{ route('trademark_search') }}',
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



function search_so(){


    formData=$("#frm_so").serialize();
    set_loader('tbl_so');
    $.ajax({
        url: '{{ route('so_search') }}',
        type: 'POST',
        data: formData,
        dataType:'json',


        success: function(data){

            set_table(data,'tbl_so')
        },
        error: function(){

        }
    });

}


function search_type(){


    formData=$("#frm_type").serialize();
    set_loader('tbl_type');
    $.ajax({
        url: '{{ route('type_search') }}',
        type: 'POST',
        data: formData,
        dataType:'json',


        success: function(data){

            set_table(data,'tbl_type')
        },
        error: function(){

        }
    });

}

function search_location(){


    formData=$("#frm_location").serialize();
    set_loader('tbl_location');
    $.ajax({
        url: '{{ route('location_search') }}',
        type: 'POST',
        data: formData,
        dataType:'json',


        success: function(data){

            set_table(data,'tbl_location')
        },
        error: function(){

        }
    });

}

function search_owner(){


    formData=$("#frm_owner").serialize();
    set_loader('tbl_owner');
    $.ajax({
        url: '{{ route('owner_search') }}',
        type: 'POST',
        data: formData,
        dataType:'json',


        success: function(data){

            set_table(data,'tbl_owner')
        },
        error: function(){

        }
    });

}


function search_active_type(){


    formData=$("#frm_active_type").serialize();
    set_loader('tbl_active_type');
    $.ajax({
        url: '{{ route('active_type_search') }}',
        type: 'POST',
        data: formData,
        dataType:'json',


        success: function(data){

            set_table(data,'tbl_active_type')
        },
        error: function(){

        }
    });

}


</script>



@stop



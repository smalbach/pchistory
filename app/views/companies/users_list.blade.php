@extends('companies/layout')




@section('content')
<h3>Lista de usuarios</h3>
<div class="row">

        {{Form::open(['id'=>'form_searh','class'=>'form-horizontal'])}}

        <div class="col-lg-9">
            <div class="col-lg-6">
                {{ Field::text('full_name','',['class'=>'form-control','id'=>'full_name']) }}
            </div>
            <div class="col-lg-6">
                <div class="col-lg-2">Estado</div>
                <div class="col-lg-10">
                    <select name="state" id="state" class="form-control">
                        <option value="active">Activo</option>
                        <option value="inactive">Inactivo</option>
                    </select>
                </div>

            </div>

        </div>

        <div class="col-lg-3">
            <button type="button" id="search_users" class="btn btn-success btn-xs">
                Buscar
            </button>
            <button type="button" id="add_user" class="btn btn-info btn-xs">
                Nuevo
            </button>
        </div>


        {{Form::close()}}

</div>
<br/>

<div id="new_user" style="display: none">

        {{Form::open(['route'=>'save_user_company','method'=>'post','id'=>'form_add_user','class'=>'form-horizontal'])}}
        <fieldset>
            <legend>Añadir Usuario</legend>

            <div class="col-lg-6">
                {{ Field::text('full_name','',['class'=>'form-control','id'=>'','data-rule-required'=>'true']) }}
                {{ Field::text('email','',['class'=>'form-control','id'=>'full_name','data-rule-required'=>'true']) }}
                {{ Field::text('password','',['class'=>'form-control','id'=>'full_name','data-rule-required'=>'true']) }}

            <div class="form-group">
                <div class="col-lg-2">Tipo</div>
                <div class="col-lg-10">
                    <select name="type" id="type" class="form-control">
                        <option value="company">Administrador</option>
                        <option value="user_company">Usuario</option>
                    </select>
                </div>

            </div>


             <div class="form-group">
                <button type="button" id="save_user" class="btn btn-success btn-xs">
                    Guardar
                </button>
                <button type="button" id="cancel_add_user" class="btn btn-xs">
                    cancelar
                </button>
            </div>


        {{Form::close()}}

    </div>


</div>




<div class="row">
    <div class="col-xs-12">

        <div id="load_usuarios"></div>


    </div>
</div>




<script>
    $(document).ready(function(){
        $("#search_users").click(function(){
            load_usurios();
        })

        $("#save_user").click(function(){
            save_user()
        })

        $("#add_user").click(function(){

            $("#new_user").effect("slide")
        })

        $("#cancel_add_user").click(function(){
            hideForm()
        })

        load_usurios();

    })

    function hideForm(){


            $("#new_user").effect("blind")


    }


    function save_user(){
        dataString=$("#form_add_user").serialize();

        $.ajax({
            type: "post",
            url:'{{route('save_user_company')}}',
            data: dataString,
            async: false,
            success: function(data){
                if(data==1){
                    alert("Error al guardar usuario")
                }else if(data==2){
                    alert("Error al guardar el usuario en la empresa")
                }else if(data==3){
                    $("#form_add_user").each (function(){ this.reset()});
                    hideForm()
                    load_usurios()
                }

            },
            error: function(data){


            }

        });
    }


    function load_usurios(){

        dataString=$("#form_searh").serialize();

        $.ajax({
            type: "get",
            url:'{{route('show_users')}}',
            data: dataString,
            async: false,
            success: function(data){
                $("#load_usuarios").html(data)
            },
            error: function(data){


            }

        });
    }


</script>




@stop


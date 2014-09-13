@extends('companies/layout')


@section('content')



<div class="row">

    {{  Form::open(['route'=>'pc_save','method'=>'POST','role'=>'form','class'=>'form-horizontal','files' => true,'id'=>'form_pc'   ]) }}
    <fieldset>
        <legend>Añadir Equipo</legend>

    <div class="col-lg-6">


        {{ Field::text('trademark','',['readonly'=>'readonly','class'=>'form-control','id'=>'trademark','data-rule-required'=>'true','placeholder'=>'Click para agregar marca']) }}
        {{ Field::hidden('trademark_id',"",['id'=>'id_trademark']) }}



        {{ Field::text('operative_system','',['readonly'=>'readonly','class'=>'form-control','id'=>'operative_system','data-rule-required'=>'true','placeholder'=>'Click para agregar SO']) }}
        {{ Field::hidden('so_id',"",['id'=>'id_operative_system']) }}

        <div class="form-group">

            <div class="col-lg-2">
                {{Form::label('type',"Tipo",['class'=>'col-lg-2  control-label'])}}
            </div>
            <div class="col-lg-10">
                <select name="type" id="" class="form-control" data-rule-required='true'>
                    <option value="Support">Soporte</option>
                    <option value="Assistance">Asistencial</option>
                </select>

            </div>

        </div>


        {{ Field::text('name','',['class'=>'form-control','data-rule-required'=>'true']) }}




        {{ Field::text('internal_id','',['class'=>'form-control']) }}

        {{ Field::text('location','',['class'=>'form-control']) }}

        {{ Field::text('owner','',['class'=>'form-control']) }}

        {{ Field::text('model','',['class'=>'form-control']) }}

        {{ Field::text('calibration','',['class'=>'form-control']) }}

        <div class="form-group">

            <div class="col-lg-2">
                {{Form::label('type_pc',"Tipo de equipo",['class'=>'col-lg-2  control-label'])}}
            </div>
            <div class="col-lg-10">
                <select name="type_pc" id="" class="form-control">
                    <option value="desktop">Escritorio</option>
                    <option value="all in one">Todo en uno</option>
                    <option value="laptop">Portatil</option>

                </select>

            </div>

        </div>



    </div>
    <div class="col-lg-6">


        {{ Field::text('serial','',['class'=>'form-control']) }}

        {{ Field::text('voltage','',['class'=>'form-control']) }}

        {{ Field::text('maintenance_day','',['class'=>'form-control','id'=>'maintenance_day']) }}

        {{ Field::text('buy_date','',['class'=>'form-control','id'=>'buy_date']) }}

        {{ Field::text('password','',['class'=>'form-control']) }}

        {{ Field::textarea('observation','',['class'=>'form-control']) }}

        {{ Field::text('ip','',['class'=>'form-control']) }}

        <div class="form-group">
            <div class="col-lg-2  control-label">
                <label for="photo">Foto</label>    </div>
            <div class="col-lg-10">
                <input class="form-control" name="photo" value="" type="file">    </div>
        </div>

        {{ Field::text('state','active',['class'=>'form-control']) }}

        {{ Field::text('order','10',['class'=>'form-control']) }}

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



<script>

    $(document).ready(function(){

        setDialog('dialog_trademark')
        setDialog('dialog_operative_system')



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


        $("#maintenance_day").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2013",
            dateFormat: "yy/mm/dd",
        });

        $("#buy_date").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2013",
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


</script>



@stop



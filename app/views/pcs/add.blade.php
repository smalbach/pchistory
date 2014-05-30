@extends('companies/layout')


@section('content')



<div class="row">

    {{  Form::open(['route'=>'pc_save','method'=>'POST','role'=>'form','class'=>'form-horizontal','id'=>'form_pc'   ]) }}
    <fieldset>
        <legend>Añadir Equipo</legend>

    <div class="col-lg-6">
        {{ Field::text('trademark','',['readonly'=>'readonly','class'=>'form-control','id'=>'trademark','data-rule-required'=>'true']) }}
        {{ Field::hidden('trademark_id',"",['id'=>'id_trademark']) }}



        {{ Field::text('operative_system','',['readonly'=>'readonly','class'=>'form-control','id'=>'operative_system','data-rule-required'=>'true']) }}
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

        {{ Field::text('photo','',['class'=>'form-control']) }}

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
    {{  Form::open(['role'=>'form','id'=>'frm_trademark'   ]) }}

    <div class="container">
        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('trademark_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_trademark()" ><i class="glyphicon glyphicon-search"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_trademark">


            </div>



        </div>



    </div>

    {{Form::close()}}

</div>



<div id="dialog_operative_system" title="Buscar Sistema operativo" >
    {{  Form::open(['role'=>'form','id'=>'frm_so']) }}

    <div class="container">
        <div class="grid">
            <div class="row">

                <div class="col-lg-8">
                    <div class="col-lg-8">
                        {{ Field::text('so_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-4">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_so()" ><i class="glyphicon glyphicon-search"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_so">


            </div>



        </div>



    </div>

    {{Form::close()}}

</div>



<script>





$(document).ready(function(){

    setDialog('dialog_trademark')
    setDialog('dialog_operative_system')



    $("#trademark").on('click', function(){
        table_active="trademark"
        $("#dialog_trademark").dialog('open');

    });

    $("#operative_system").on('click', function(){
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


});


    function search_trademark(){


        formData=$("#frm_trademark").serialize();

        $.ajax({
            url: '{{ route('trademark_search') }}',
            type: 'POST',
            data: formData,
            dataType:'json',
            async:false,

            success: function(data){

                set_table(data,'tbl_trademark')
            },
            error: function(){

            }
        });

    }



    function search_so(){


        formData=$("#frm_so").serialize();

        $.ajax({
            url: '{{ route('so_search') }}',
            type: 'POST',
            data: formData,
            dataType:'json',
            async:false,

            success: function(data){

                set_table(data,'tbl_so')
            },
            error: function(){

            }
        });

    }


</script>



@stop



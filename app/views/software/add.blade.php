@extends('companies/layout')


@section('content')



<div class="row">

    {{  Form::open(['route'=>'software_save','method'=>'POST','role'=>'form','class'=>'form-horizontal','files' => true,'id'=>'software_save'   ]) }}
    <fieldset>
        <legend>Añadir Software</legend>

    <div class="col-lg-6">



        <div class="form-group">

            <div class="col-lg-2">
                {{Form::label('type',"Tipo Software",['class'=>'col-lg-2  control-label'])}}
            </div>
            <div class="col-lg-10">
                <select name="type" id="" class="form-control" data-rule-required='true'>
                    <option>Sistemas Operativos</option>
                    <option>Sistemas de informacion</option>
                    <option>Bases de datos</option>
                    <option>Ofimátca</option>
                    <option>Antivirus</option>
                    <option>Aplicaciones generales</option>
                    <option>Otros</option>
                </select>

            </div>

        </div>






        {{ Field::text('name','',['class'=>'form-control']) }}



        <div class="form-group">

            <div class="col-lg-2">
                {{Form::label('state',"Estado",['class'=>'col-lg-2  control-label'])}}
            </div>
            <div class="col-lg-10">
                <select name="state" id="" class="form-control" data-rule-required='true'>
                    <option>En desarrollo</option>
                    <option>Instalado</option>
                    <option>En producción</option>
                </select>

            </div>

        </div>




        {{ Field::text('quantity','',['class'=>'form-control']) }}


        {{ Field::text('quantity_licenses','',['class'=>'form-control']) }}



        <div class="form-group">

            <div class="col-lg-2">
                {{Form::label('type',"Desarrollo",['class'=>'col-lg-2  control-label'])}}
            </div>
            <div class="col-lg-10">
                <select name="developed" id="" class="form-control" data-rule-required='true'>
                    <option>Desarollo propio</option>
                    <option>Desarrollo de terceros</option>

                </select>

            </div>

        </div>




        <div class="form-group">

            <div class="col-lg-2">
                {{Form::label('support',"Soporte",['class'=>'col-lg-2  control-label'])}}
            </div>
            <div class="col-lg-10">
                <select name="support" id="" class="form-control" data-rule-required='true'>
                    <option>Interno</option>
                    <option>Externo</option>
                    <option>No exite</option>
                </select>

            </div>

        </div>



        {{ Field::text('licences_number_server','',['class'=>'form-control']) }}


        {{ Field::text('licences_number_client','',['class'=>'form-control']) }}


        {{ Field::text('plataform','',['class'=>'form-control']) }}



        {{ Field::text('language','',['class'=>'form-control']) }}

    </div>
        <div class="col-lg-6">

        {{ Field::text('databases','',['class'=>'form-control']) }}


        {{ Field::text('last_vendor','',['class'=>'form-control']) }}



        {{ Field::text('license_value','',['class'=>'form-control']) }}


        {{ Field::text('maintenance_cost','',['class'=>'form-control']) }}


        {{ Field::text('owner_soft','',['class'=>'form-control']) }}


        {{ Field::text('owner_code','',['class'=>'form-control']) }}


        {{ Field::text('restrictions','',['class'=>'form-control']) }}


        {{ Field::text('support_state','',['class'=>'form-control']) }}


        {{ Field::text('version','',['class'=>'form-control']) }}


        {{ Field::text('version','',['class'=>'form-control']) }}







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





<script>

    $(document).ready(function(){

        $("#software_save").validate({
             submitHandler: function(form){
                save()
            }
        })



    });





    function save(){


        formData=$("#software_save").serialize();

        $.ajax({
            url: '{{ route('software_save') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                if(data!="error"){

                    $("#software_save").each (function(){ this.reset()});
                    alert("Guardado correctamente")
                }else{
                    alert("Error al guardar ")
                }

            },
            error: function(){

            }
        });

    }





</script>



@stop



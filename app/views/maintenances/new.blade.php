@extends('companies/layout')


@section('content')

<h3>Datos de Orden</h3>

<div class="row">
<div class="col-lg-12">

    <div class="col-lg-6">
        {{  Form::open(['route'=>'new_order','method'=>'POST','role'=>'form','id'=>'frm_support','class'=>'form-horizontal'  ]) }}
            {{ Field::text('support','',['readonly'=>'readonly','class'=>'form-control','id'=>'support_text','data-rule-required'=>'true']) }}
            {{ Field::hidden('support_id',"",['id'=>'support_id']) }}



        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Descripcion del problea</label>
            <div class="col-lg-10">
                <textarea
                    class="form-control"
                    rows="3"
                    name="issues"
                    id="issues"
                    data-rule-required="true"
                    ></textarea>
                <span class="help-block">Breve descripcion de o de los problemas presentados en el equipo.</span>
            </div>
        </div>


        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Prioridad</label>
            <div class="col-lg-10">
                <select class="form-control" id="priprity" name="priority">
                    <option value="low">Baja</option>
                    <option value="medium">Media</option>
                    <option value="high">Alta</option>



                </select>

            </div>
        </div>



        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Observaciones</label>
            <div class="col-lg-10">
                <textarea
                    class="form-control"
                    rows="3"
                    name="observation"
                    id="observation"></textarea>
                <span class="help-block">Si tiene una observacion adicional sobre el problea.</span>
            </div>
        </div>


        {{ Field::hidden('pc_id',$id,['class'=>'form-control']) }}

        <div class="form-group">
            <div class="col-lg-12">

                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>




        {{Form::close()}}




    </div>




    <div class="col-lg-6">

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">PC: {{$pc->name}}</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="http://aikon.co/img/aikon.png" data-src="holder.js/100%x180"   class="img-thumbnail">
                        </a>
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
</div>






<div id="dialog_support" title="Buscar Marca" >
    {{  Form::open(['role'=>'form','id'=>'frm_support'   ]) }}

    <div class="container">
        <div class="grid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="col-lg-10">
                        {{ Field::text('support_name','',['class'=>'form-control']) }}

                    </div>
                    <div class="col-lg-2">
                        <button type="button"  class="btn btn-success btn-sm" onclick="search_support()" ><i class="glyphicon glyphicon-search"></i></button>
                    </div>



                </div>


            </div>
        </div>

        <div class="row">

            <div id="tbl_support">


            </div>



        </div>



    </div>

    {{Form::close()}}

</div>

<script>

$(document).ready(function(){


    setDialog('dialog_support')



    $("#support_text").on('click', function(){
        table_active="support"
        $("#dialog_support").dialog('open');

    });


    $("#frm_support").validate();

});


    function search_support(){

        formData=$("#frm_support").serialize();

        $.ajax({
            url: '{{ route('support_search') }}',
            type: 'POST',
            data: formData,
            dataType:'json',



            success: function(data){

                set_table(data,'tbl_support')
            },
            error: function(){

            }
        });

    }


</script>



@stop



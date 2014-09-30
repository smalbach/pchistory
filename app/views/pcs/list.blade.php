@extends('companies/layout')


@section('content')
<style>
    .upper-table tr td,.upper-table tr th{
        text-transform: uppercase;

    }

</style>


<h3>Lista de Equipos</h3>

{{  Form::open(['method'=>'POST','role'=>'form','class'=>'form-horizontal','id'=>'filter'   ]) }}
<div class="form-group">

    <div class="col-lg-1">
        <label for="filter">Filtrar por:</label>
    </div>
    <div class="col-lg-3">
        <select name="filter" id="" class="form-control" data-rule-required='true'>

            <option  value='pcs.id' >Id</option>

            <option  value='trademark' >Marca</option>

            <option  value='type' >Typo</option>
            <option  value='location' >Ubicacion</option>
            <option  value='owner' >Responsable</option>
            <option  value='active_type' >Tipo de Activo</option>
            <option  value='name' >Nombre</option>
            <option  value='internal_id' >Codigo interno</option>
            <option  value='model' >Modelo</option>
            <option  value='serial' >Serial</option>
            <option  value='voltage' >Voltaje</option>
            <option  value='maintenance_day' >Fecha de mantenimiento</option>
            <option  value='maintenance_freq' >Frecuencia de mantenimiento</option>
            <option  value='buy_date' >Fecha de compra</option>
            <option  value='password' >Contraseña</option>
            <option  value='observation' >Observacion</option>
            <option  value='calibration' >Calibracion</option>
            <option  value='ip' >Ip</option>
            <option  value='waranty' >Garantia</option>
            <option  value='vendor' >Proveedor</option>
            <option  value='access_number' >Punto de acceso</option>
            <option  value='amount' ></option>


        </select>

    </div>

    <div class="col-lg-6">
        {{ Form::text('value') }}
        <button type="submit" class="btn btn-info btn-xs">Buscar</button>
    </div>
</div>



<div id="list_table">
    <h4>Total: <span><strong>{{ $pcs->getTotal() }}</span></strong> </h4>
    <table  class="table  table-striped upper-table" >

        <tr class="info">
            <th>Nombre</th>
            <th>Ubicacion</th>
            <th>Responsable</th>
            <th>Codigo interno</th>
            <th>Marca</th>
            <th>Acción</th>
        </tr>


    @foreach ($pcs as $pc)

        @if($pc->owner_id==Auth::user()->id || Auth::user()->type=='company')

            <tr>
                <td>{{  $pc->p_name  }}</td>
                <td>{{  $pc->l_name}}</td>
                <td>{{  $pc->full_name  }}</td>
                <td>{{  $pc->internal_id  }}</td>
                <td>{{  $pc->t_name }}</td>


                <td>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{  route('pc_detail', array('id' => $pc->id)) }}">Mostrar</a></li>
                                <li><a href="{{  route('new_order', array('id' => $pc->id)) }}">Orden de Mantenimeinto</a></li>
                                @if(Auth::user()->type=='company')

                                    <li><a href="#" pc_id="{{$pc->id}}" data="maintenance" class="dates">Fecha de Mantemiento</a></li>
                                    <li><a href="#" pc_id="{{$pc->id}}"data="copy" class="dates">Fecha de copia de seguridad</a></li>

                                @endif
                            </ul>
                        </li>
                    </ul>



                </td>

            </tr>

        @endif
    @endforeach




    </table>

    <div class="pagination">
        {{ $pcs->links() }}
    </div>

</div>


<div id="maintenance" title="Fecha de mantenimiento" >



            <div class="col-lg-6">
                <input
                    name="date"
                    type="text"
                    id="m_date"

                    data-rule-required="true"
                    data-rule-date="true"

                    >

                <input name="_token" autofocus id="m_token"  value="{{csrf_token()}}" type="hidden">
                <button type="button" id="save_submit" class="btn btn-info btn-xs">Guardar</button>
            </div>

    <div class="row">
        <div class="col-xs-12">
            <div id="maintenances-data">

            </div>

        </div>

    </div>


</div>




<div id="copy" title="Copias de seguridad" >


    <div class="col-lg-6">
        <input
            name="date"
            type="text"
            id="c_date"
             data-rule-required="true"
            data-rule-date="true"

            >

        <input name="_token"  id="c_token"  autofocus value="{{csrf_token()}}" type="hidden">
        <button type="button" id="save_submit_c" class="btn btn-info btn-xs">Guardar</button>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div id="copy-data">

            </div>

        </div>

    </div>
</div>





<script>
    var page=1;
    var pcid;
    $(document).ready(function(){

        $("#m_date").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "+nn:2050",
            dateFormat: "yy/mm/dd"
        });

        $("#c_date").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "+nn:2050",
            dateFormat: "yy/mm/dd"
        });



        $("#filter").validate({
            submitHandler: function(form){
                search_data()
            }
        })

        $("#save_submit").click(function(){
            if($("#m-date").val()!=""){
                save_maintenance()
            }else{
                alert("Debe ingresar la fecha")
            }


        })
        $("#save_submit_c").click(function(){
            if($("#c-date").val()!=""){
                save_copy()
            }else{
                alert("Debe ingresar la fecha")
            }


        })

        iniciar()



    })

    function iniciar(){

        $(".dates").click(function(e){
            e.preventDefault();

            $("#"+$(this).attr("data")).dialog("open")
            if($(this).attr("data")=="maintenance") search_maintenance($(this).attr("pc_id"))
            else search_copy($(this).attr("pc_id"))

        })

        setDialogNB('maintenance')
        setDialogNB('copy')





        $(".pagination a").click(function(e){
            e.preventDefault();

            if($(this).text()=="»"){
                page=page+1
            }else if($(this).text()=="«"){
                page=page-1
            }else{
                page=$(this).text()
            }


            search_data()


        })
    }


    function search_data(){

        formData=$("#filter").serialize()+"&page="+page;

        $.ajax({
            url: '{{ route('list_pc_ajax') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                $("#list_table").html(data)
            },
            error: function(){

            }
        });
    }


    function search_maintenance(id){

        var formData="pc="+id
        pcid =id
        $.ajax({
            url: '{{ route('schedule_search') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                set_table(data,"maintenances-data")


            },
            error: function(){

            }
        });
    }

    function search_copy(id){

        var formData="pc="+id
        pcid =id
        $.ajax({
            url: '{{ route('copy_search') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                set_table(data,"copy-data")
            },
            error: function(){

            }
        });
    }


    function save_maintenance(){

        var formData="_token="+$("#m_token").val();
        formData+="&pc_id="+pcid;
        formData+="&date="+$("#m_date").val();

        $.ajax({
            url: '{{ route('schedule_save') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                search_maintenance(pcid)
            },
            error: function(){

            }
        });
    }
    function save_copy(id){

        var formData="_token="+$("#c_token").val();
        formData+="&pc_id="+pcid;
        formData+="&date="+$("#c_date").val();

        $.ajax({
            url: '{{ route('copy_save') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                search_copy(pcid)
            },
            error: function(){

            }
        });
    }



</script>

@stop



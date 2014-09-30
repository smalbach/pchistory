@extends('companies/layout')


@section('content')
<style>
    .upper-table tr td,.upper-table tr th{
        text-transform: uppercase;

    }

</style>


<h3>Lista de Softwares</h3>

{{  Form::open(['method'=>'POST','role'=>'form','class'=>'form-horizontal','id'=>'filter'   ]) }}
<div class="form-group">

    <div class="col-lg-1">
        <label for="filter">Filtrar por:</label>
    </div>
    <div class="col-lg-3">
        <select name="filter" id="" class="form-control" data-rule-required='true'>
            <option value='name' >Nombre</option>
            <option value='state' >Estado</option>
            <option value='type' >Typo</option>
            <option value='quantity' >Cantidad instalaciones</option>
            <option value='quantity_licenses' >Cantidad licencias</option>
            <option value='developed' >Tipo desarrollo</option>
            <option value='support' >Soporte</option>
            <option value='licences_number_server' > Licencias servidor</option>
            <option value='licences_number_client' >Licencias Cliente</option>
            <option value='plataform' >Plataforma</option>
            <option value='language' >Lenguaje</option>
            <option value='database' >Base de datos</option>
            <option value='last_vendor' >Último proveedor</option>
            <option value='license_value' >Valor licencia</option>
            <option value='maintenance_cost' >Costo de mantenimiento</option>
            <option value='owner_soft' >Propietario del software</option>
            <option value='owner_code' >Propietario del codigo</option>
            <option value='restrictions' >Restricciones</option>
            <option value='support_state' >Estado del soporte</option>

        </select>

    </div>

    <div class="col-lg-6">
        {{ Form::text('value') }}
        <button type="submit" class="btn btn-info btn-xs">Buscar</button>
    </div>



</div>




{{ Form::close()}}


<div id="list_table">
    <h4>Total: <span><strong>{{ $softwares->getTotal() }}</span></strong> </h4>
    <table  class="table  table-striped upper-table" >

        <tr class="info">
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Cantidad de licencias</th>
            <th>Estado</th>
            <th>Garantia</th>
            <th>Versión</th>
            <th colspan="3"></th>
        </tr>


        @foreach ($softwares as $soft)


        <tr>
            <td>{{  $soft->name  }}</td>
            <td>{{  $soft->type  }}</td>
            <td>{{  $soft->quantity_licenses  }}</td>
            <td>{{  $soft->state  }}</td>
            <td>{{  $soft->quantity  }}</td>
            <td>{{  $soft->version  }}</td>
            <td>

                <a  class="btn btn-success btn-xs" href="#" >
                    Mostrar
                </a>


            </td>
            <td>

            </td>


        </tr>

        @endforeach




    </table>

    <div class="pagination">
        {{ $softwares->links() }}
    </div>
</div>

<script>
    var page=1;

    $(document).ready(function(){
        $("#filter").validate({
            submitHandler: function(form){
                search_data()
            }
        })
        iniciar()



    })

    function iniciar(){
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
            url: '{{ route('list_ajax') }}',
            type: 'POST',
            data: formData,
            success: function(data){
                $("#list_table").html(data)
            },
            error: function(){

            }
        });
    }



</script>

@stop



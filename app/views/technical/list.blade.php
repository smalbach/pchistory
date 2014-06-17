@extends('technical/layout')



@section('content')



<h3>Ordenes de mantenimiento</h3>


<div class="row">
    <div class="col-lg-12">
        <label for="">Mostrar</label>
    </div>
    <div class="col-lg-6">
        <select name="state" id="state" >
            <option value="waiting">En espera</option>
            <option value="processing">En proceso</option>
            <option value="fix">Arreglados</option>
            <option value="_">Todos</option>

        </select>

    </div>
</div>


<table  class="table  table-striped " >

    <tr class="info">
        <th>Nombre</th>
        <th>Ubicacion</th>
        <th>Responsable</th>
        <th>Empresa</th>
        <th>Problemas</th>
        <th>Prioridad</th>
        <th>Observación</th>


        @if($state=="fix" || $state=="_" )
        <th colspan="1"></th>
        <th>Hallazgos</th>
        <th>Reporte Tecnico</th>
        <th>Recomendaciones</th>
        @else
        <th colspan="4"></th>

        @endif

    </tr>


    @foreach ($orders as $order)


    <tr
        @if ($order->state == 'waiting') class="danger"
        @elseif ($order->state == 'processing') class="warning"
        @elseif ($order->state == 'fix') class="success"
        @endif
    >
        <td>{{  $order->name  }}</td>
        <td>{{  $order->location  }}</td>
        <td>{{  $order->owner  }}</td>
        <td>{{  $order->company  }}</td>
        <td>{{  $order->issues  }}</td>
        <td>


            @if ($order->priority== 'high')

                <span class="label label-danger">Alta  </span>
            @elseif ($order->priority == 'medium')

                <span class="label label-warning">Media</span>
            @elseif ($order->priority == 'low')

                <span class="label label-info">Baja</span>
            @endif



        </td>
        <td>{{  $order->observation  }}</td>


        <td>
            @if(Auth::user()->type=='technical')

            {{  Form::open(['route'=>'do_order','method'=>'post','role'=>'form','id'=>'frm_accesory_delete'   ]) }}

            {{ Field::hidden('order_id',$order->m_id,['class'=>'form-control','id'=>'order_id']) }}
            {{ Field::hidden('pc_id',$order->pc_id,['class'=>'form-control','id'=>'pc_id']) }}


                <div class="form-group">
                    <div class="col-lg-12 col-lg-offset-2">

                        @if ($order->state != 'fix')
                            <button type="submit" class="btn btn-primary btn-sm">Realizar</button>

                        @endif
                    </div>
                </div>




            {{Form::close()}}
            @endif

        </td>

        @if ($order->state == 'fix')
            <td> {{  $order->find  }}</td>
            <td> {{  $order->tecnical_report  }}</td>
            <td> {{  $order->recommendations  }}</td>

        @else
         <td colspan="3"></td>

        @endif


    </tr>

    @endforeach




</table>
<div class="pagination">


    {{ $orders->appends(array('state' => $state))->links() }}
</div>



<script>
    $("#state").change(function(){
        var estado=$("#state").val();
        window.location="{{ route('technical_list') }}"+'?page={{$orders->getCurrentPage()}}&state='+estado;
    })

    $("#state").val('{{$state}}')


</script>

@stop



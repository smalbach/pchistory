@extends('companies/layout')


@section('content')
<style>
    .upper-table tr td,.upper-table tr th{
        text-transform: uppercase;

    }

</style>


<h3>Fechas de mantenimiento de equipos</h3>

<h4>Total: <span><strong>{{ $pcs->getTotal() }}</span></strong> </h4>
<table  class="table  table-striped upper-table" >

    <tr class="info">
        <th>Nombre</th>
        <th>Ubicacion</th>
        <th>Responsable</th>
        <th>Codigo interno</th>
        <th>Fecha mantenimiento</th>

    </tr>


    @foreach ($pcs as $pc)


    <tr>
        <td>{{  $pc->name  }}</td>
        <td>{{  $pc->location  }}</td>
        <td>{{  $pc->owner  }}</td>
        <td>{{  $pc->internal_id  }}</td>
        <td>{{  $pc->maintenance_day  }}</td>



    </tr>

    @endforeach




</table>

<div class="pagination">
    {{ $pcs->links() }}
</div>




@stop



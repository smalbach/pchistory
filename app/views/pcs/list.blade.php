@extends('companies/layout')


@section('content')
<style>
    .upper-table tr td,.upper-table tr th{
        text-transform: uppercase;

    }

</style>


<h3>Lista de Equipos</h3>

<h4>Total: <span><strong>{{ $pcs->getTotal() }}</span></strong> </h4>
<table  class="table  table-striped upper-table" >

    <tr class="info">
        <th>Nombre</th>
        <th>Ubicacion</th>
        <th>Responsable</th>
        <th>Codigo interno</th>
        <th colspan="3"></th>
    </tr>


    @foreach ($pcs as $pc)


    <tr>
        <td>{{  $pc->name  }}</td>
        <td>{{  $pc->location  }}</td>
        <td>{{  $pc->owner  }}</td>
        <td>{{  $pc->internal_id  }}</td>
        <td>
            @if(Auth::user()->type=='company')

            <a  class="btn btn-success btn-xs" href="{{  route('pc_detail', array('id' => $pc->id)) }}" >
                Administrar
            </a>
            @endif

        </td>
        <td>
            <a  class="btn btn-warning btn-xs" href="{{  route('new_order', array('id' => $pc->id)) }}" >
                Orden de Mantenimeinto
            </a>
        </td>


    </tr>

    @endforeach




</table>

<div class="pagination">
    {{ $pcs->links() }}
</div>




@stop



@extends('companies/layout')


@section('content')

<h3>Lista de Equipos</h3>


<table  class="table  table-striped " >

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
            <a  class="btn btn-success btn-xs" href="{{  route('pc_detail', array('id' => $pc->id)) }}" >
                Administrar
            </a>

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



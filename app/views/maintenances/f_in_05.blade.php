

<table border="1" width="100%">
    <tr>
        <td rowspan="4"><img src="{{ asset('img/logo.jpg')}}" width="100"></td>
    </tr>

    <tr>
        <td><center>SISTEMA DE GESTIN DE CALIDAD</center></td>
        <td><center>Código:</center></td>
        <td><center>F-IN-05</center></td>

    </tr>
    <tr>

        <td><center>SECRETARIA DE EDUCACIÓN DE SUCRE</center></td>
        <td><center>Versión:</center></td>
        <td><center>3</center></td>

    </tr>
    <tr>
        <td><center>REPORTE DE MANTENIMIENTO</center></td>
        <td><center>Página:</center></td>
        <td><center>1 DE 1</center></td>
    </tr>
</table>
@foreach($pcs as $pc)
<table border="1" width="100%">

    <tr>
        <td colspan="2">Fecha de reporte</td>
        <td>Código de orden</td>
        <td>Código de reporte</td>

    </tr>
    <tr>
        <td colspan="2">{{ $pc->r_created_at }}</td>

        <td>{{ $pc->id }}</td>
        <td>{{ $pc->r_id }}</td>
    </tr>
    <tr>
        <td colspan="4">Datos del equipo</td>

    </tr>
    <tr>
        <td>Nombre:</td>
        <td>{{ $pc->p_name  }}.</td>
        <td>Zona/Ubicación:</td>
        <td>{{ $pc->location }}</td>

    </tr>
    <tr>
        <td >Marca:</td>
        <td>{{ $pc->t_name }}</td>
        <td>Modelo</td>
        <td>{{ $pc->model }}</td>
    </tr>
    <tr>
        <td>Serial</td>
        <td>{{ $pc->model }}</td>
        <td>Codigo interno</td>
        <td>{{ $pc->internal_id }}</td>
    </tr>
    <tr>
        <td colspan="4">
            Descripcion del hallazgo
        </td>
    </tr>
    <tr>
        <td colspan="4">{{ $pc->find }}</td>
    </tr>
    <tr>
        <td colspan="4">
            Reporte Técnico
        </td>
    </tr>
    <tr>
        <td colspan="4">{{ $pc->tecnical_report }}</td>
    </tr>
    <tr>
        <td colspan="4">
            Recomendaciones
        </td>
    </tr>
    <tr>
        <td colspan="4">{{ $pc->recommendations }}</td>
    </tr>
    <tr>
        <td>Tarea realizada por: </td>
        <td colspan="3">{{ $pc->s_name }}</td>
    </tr>
    <tr>
        <td>Reporte Técnico por:</td>
        <td>{{ $pc->make }}</td>
        <td>Recibo conforme</td>
        <td></td>
    </tr>

</table>


@endforeach




<table border="0" width="100%">
    <tr>
        <td rowspan="4"><img src="{{ asset('img/logo.jpg')}}" width="100"></td>
    </tr>

    <tr>
        <td><center>SISTEMA DE GESTIN DE CALIDAD</center></td>
        <td><center>Código:</center></td>
        <td><center>F-IN-03</center></td>

    </tr>
    <tr>

        <td><center>SECRETARIA DE EDUCACIÓN DE SUCRE</center></td>
        <td><center>Versión:</center></td>
        <td><center>3</center></td>

    </tr>
    <tr>
        <td><center>ORDEN DE MANTENIMIENTO</center></td>
        <td><center>Página:</center></td>
        <td><center>1 DE 1</center></td>
    </tr>
</table>
@foreach($pcs as $pc)
<table border="0" width="100%">

    <tr>
        <td>Fecha Solicitud</td>
        <td>Solicitante</td>
        <td>Ubicación</td>
        <td>Código Solicitud</td>

    </tr>
    <tr>
        <td>{{ $pc->created_at }}</td>
        <td>{{ $pc->owner }}.</td>
        <td>{{ $pc->location  }}.</td>
        <td>{{ $pc->id }}</td>
    </tr>
    <tr>
        <td >Prioridad Solicitud</td>
        <td colspan="3">
        @if($pc->priority=="low")
            Bajo
        @elseif($pc->priority=="medium")
             Medio
        @elseif($pc->priority=="high")
            Alto
        @endif

        </td>
    </tr>

    <tr>
        <td colspan="4">
            Descripcion
        </td>
    </tr>
    <tr>
        <td colspan="4">{{ $pc->issues }}</td>
    </tr>
    <tr>
        <td colspan="4">
            Obervaciones
        </td>
    </tr>
    <tr>
        <td colspan="4">{{ $pc->observation }}</td>
    </tr>
    <tr>
        <td>Autorizado por:</td>
        <td colspan="3">{{ $pc->user }}</td>
    </tr>
    <tr>
        <td>Responsable de Mantenimiento:</td>
        <td>{{ $pc->s_name }}</td>
        <td>Contacto</td>
        <td>{{ $pc->contact }}</td>
    </tr>
    <tr>
        <td>Celular/Tel.</td>
        <td>{{ $pc->cell }} {{ $pc->phone }}</td>
        <td>Email.</td>
        <td>{{ $pc->email }}</td>
    </tr>

</table>


@endforeach


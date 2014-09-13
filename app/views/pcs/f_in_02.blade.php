

<table border="1" width="100%">
    <tr>
        <td rowspan="4"><img src="{{ asset('img/logo.jpg')}}" width="100"></td>
    </tr>

    <tr>
        <td><center>SISTEMA DE GESTIN DE CALIDAD</center></td>
        <td><center>Código:</center></td>
        <td><center>F-IN-02</center></td>

    </tr>
    <tr>

        <td><center>CLÍNICA OFTALMOLOGICA DE SINCELEJO LTDA</center></td>
        <td><center>Versión:</center></td>
        <td><center>3</center></td>

    </tr>
    <tr>
        <td><center>HOJA DE VIDA EQUIPOS</center></td>
        <td><center>Página:</center></td>
        <td><center>1 DE 1</center></td>
    </tr>
</table>
<table border="1" width="100%">
    <tr>
        <td rowspan="12"><img src="{{ asset('eq/')}}/{{$pc->photo}}" width="150" height="150" ></td>

    </tr>
    <tr>
    <tr>
        <td >Tipo de equipo</td>
        <td>{{ $pc->type }}</td>
        <td>Ubicación</td>
        <td>{{ $pc->location }}</td>
    </tr>

    <tr>
        <td>Nombre del equipo</td>
        <td colspan="3">{{ $pc->name }}</td>
    </tr>

    <tr>
        <td>Marca</td>
        <td>{{ $pc->trademark->name }}</td>
        <td>Responsable</td>
        <td>{{ $pc->owner }}</td>

    </tr>
    <tr>
        <td>Modelo</td>
        <td>{{ $pc->model }}</td>
        <td>Codigo interno</td>
        <td>{{ $pc->internal_id }}</td>
    </tr>
    <tr>
        <td>Serial</td>
        <td>{{ $pc->serial }}</td>
        <td>Voltaje/Corriente</td>
        <td>{{ $pc->voltage }}</td>

    </tr>
    <tr>
        <td>Garantia</td>
        <td>{{ $pc->waranty }}</td>
        <td>F. mantenimiento</td>
        <td>{{ $pc->maintenance_day }}</td>
    </tr>
    <tr>
        <td>Calibración</td>
        <td>{{ $pc->calibration }}</td>
        <td>Fecha Compra</td>
        <td>{{ $pc->buy_date }}</td>
    </tr>
    <tr>
        <td>S. O.</td>
        <td>{{ $pc->so->name." ".$pc->so->version }}</td>
        <td>Proveedor</td>
        <td>{{ $pc->vendor }}</td>

    </tr>
    <tr>
        <td>IP</td>
        <td>{{ $pc->ip }}</td>
        <td>Contraseña</td>
        <td>
            @if(Auth::user()->type=='company')
            {{ $pc->password }}
            @else
            No tiene permisos para ver
            @endif

        </td>
    </tr>
    <tr>
        <td>Carcteristicas</td>
        <td>{{ $pc->observation }}</td>
        <td>State</td>
        <td>{{ $pc->state }}</td>
    </tr>

</table>






<table border="1" width="100%">
    <tr>
        <td colspan="5"><center>Especificaciones técnicas(solo para equipos de computo y similares)</center></td>
    </tr>
    <tr class="warning">

        <th>Dispositivo</th>
        <th>Capacidad</th>
        <th>Cantidad</th>
        <th>Unidad</th>
        <th>Descripción</th>


    </tr>
    @foreach($accesories as $accesory)
    <tr>

        <td>{{$accesory->name}}</td>
        <td>{{$accesory->capacity}}</td>
        <td>{{$accesory->value}}</td>
        <td>{{$accesory->unity}}</td>
        <td>{{$accesory->description}}</td>

    </tr>



    @endforeach
</table>






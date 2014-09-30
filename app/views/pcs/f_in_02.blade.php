

<table class="lineas"  border="0" width="100%">
    <tr>
        <td  rowspan="4"><img src="{{ asset('img/logo.jpg')}}" width="100"></td>
    </tr>

    <tr>
        <td ><center><strong>SISTEMA DE GESTIÓN DE CALIDAD</strong></center></td>
        <td ><center><strong>Código:</strong></center></td>
        <td ><center>F-IN-02</center></td>

    </tr>
    <tr>

        <td><center><strong>SECRETARIA DE EDUCACIÓN DE SUCRE</strong></center></td>
        <td><center><strong>Versión:</strong></center></td>
        <td><center>3</center></td>

    </tr>
    <tr>
        <td><center><strong>HOJA DE VIDA EQUIPOS</strong></center></td>
        <td><center><strong>Página:</strong></center></td>
        <td><center>1 DE 1</center></td>
    </tr>
</table>
<table border="0" width="100%">
    <tr>
        <td rowspan="12"><img src="{{ asset('eq/')}}/{{$pc->photo}}" width="150" height="150" ></td>

    </tr>
    <tr>
    <tr>
        <td ><strong>Tipo de equipo</strong></td>
        <td>{{ $pc->type }}</td>
        <td><strong>Ubicación</strong></td>
        <td>{{ $pc->location }}</td>
    </tr>

    <tr>
        <td><strong>Nombre del equipo</strong></td>
        <td colspan="3">{{ $pc->name }}</td>
    </tr>

    <tr>
        <td><strong>Marca</strong></td>
        <td>{{ $pc->trademark->name }}</td>
        <td><strong>Responsable</strong></td>
        <td>{{ $pc->owner }}</td>

    </tr>
    <tr>
        <td><strong>Modelo</strong></td>
        <td>{{ $pc->model }}</td>
        <td><strong>Código interno</strong></td>
        <td>{{ $pc->internal_id }}</td>
    </tr>
    <tr>
        <td><strong>Serial</strong></td>
        <td>{{ $pc->serial }}</td>
        <td><strong>Voltaje/Corriente</strong></td>
        <td>{{ $pc->voltage }}</td>

    </tr>
    <tr>
        <td><strong>Garantía</strong></td>
        <td>{{ $pc->waranty }}</td>
        <td><strong>Fecha mantenimiento</strong></td>
        <td>{{ $pc->maintenance_day }}</td>
    </tr>
    <tr>
        <td><strong>Calibración</strong></td>
        <td>{{ $pc->calibration }}</td>
        <td><strong>Fecha Compra</strong></td>
        <td>{{ $pc->buy_date }}</td>
    </tr>
    <tr>
        <td><strong></strong></td>
        <td></td>
        <td><strong>Proveedor</strong></td>
        <td>{{ $pc->vendor }}</td>

    </tr>
    <tr>
        <td><strong>IP</strong></td>
        <td>{{ $pc->ip }}</td>
        <td><strong>Contraseña</strong></td>
        <td>
            @if(Auth::user()->type=='company')
            {{ $pc->password }}
            @else
            No tiene permisos para ver
            @endif

        </td>
    </tr>
    <tr>
        <td><strong>Carcteristicas</strong></td>
        <td>{{ $pc->observation }}</td>
        <td><strong>State</strong></td>
        <td>{{ $pc->state }}</td>
    </tr>

</table>






<table border="0" width="100%">
    <tr>
        <td colspan="5"><center><strong>Especificaciones técnicas(solo para equipos de computo y similares)</center></td>
    </tr>
    <tr class="warning">

        <th><strong>Dispositivo</th>
        <th><strong>Capacidad</th>
        <th><strong>Cantidad</th>
        <th><strong>Unidad</th>
        <th><strong>Descripción</th>


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






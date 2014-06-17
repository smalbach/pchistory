

<div class="col-xs-12">
<div class="col-xs-4">
    <h3>Reportes de Mantenimiento</h3>
    <table class="table table-responsive  col-xs-4">
        <tr>
            <th class="hidden">Id</th>
            <th>Empresa</th>
            <th class="hidden">Prioridad</th>
            <th class="hidden">Observación</th>
            <th class="hidden">Estado</th>
            <th>Hallazgos</th>
            <th>Reporte tecnico</th>
            <th>Recomendaciones</th>


        </tr>
    @foreach($reports as  $report)

        <tr>
            <td class="hidden">{{ $report->m_id }}</td>
            <td>{{ $report->technical }}</td>
            <td class="hidden">{{ $report->priority }}</td>
            <td class="hidden">{{ $report->observation }}</td>
            <td class="hidden">{{ $report->state }}</td>
            <td>{{ $report->find }}</td>
            <td>{{ $report->tecnical_report }}</td>
            <td>{{ $report->recommendations }}</td>
        </tr>

    @endforeach

    </table>

</div>


<div class="col-xs-4">

    <h3>Accesorios</h3>
    <table class="table table-bordered col-xs-4">
        <tr>
            <th>Accesorio</th>
            <th >Descripcion</th>
            <th>Fecha</th>



        </tr>
        @foreach($accesories as  $accesory)


        <tr>
            <td>{{ $accesory->name }}</td>
            <td>{{ $accesory->description }}</td>
            <td>{{ $accesory->updated_at }}</td>

        </tr>



        @endforeach

    </table>


</div>


<div class="col-xs-4">
    <h3>Historial de cambios</h3>
    <table class="table table-bordered col-xs-4">
        <tr>
            <th class="hidden">Accesorio</th>
            <th>Descripcion</th>
            <th>Fecha</th>



        </tr>
        @foreach($historys as  $history)


        <tr>
            <td class="hidden">{{ $history->name }}</td>
            <td>{{ $history->motive }}</td>
            <td>{{ $history->updated_at }}</td>

        </tr>



        @endforeach

    </table>



</div>



</div>
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

<script>
    $(document).ready(function(){
        iniciar()
    })

</script>



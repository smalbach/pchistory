<h4>Total: <span><strong>{{ $pcs->getTotal() }}</span></strong> </h4>
<table  class="table  table-striped upper-table" >

    <tr class="info">
        <th>Nombre</th>
        <th>Ubicacion</th>
        <th>Responsable</th>
        <th>Codigo interno</th>
        <th>Marca</th>
        <th>ACCIÓN</th>
    </tr>


    @foreach ($pcs as $pc)

        @if($pc->owner_id==Auth::user()->id || Auth::user()->type=='company' )
        <tr>
            <td>{{  $pc->p_name  }}</td>
            <td>{{  $pc->l_name}}</td>
            <td>{{  $pc->full_name  }}</td>
            <td>{{  $pc->internal_id  }}</td>
            <td>{{  $pc->t_name }}</td>


            <td>

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{  route('pc_detail', array('id' => $pc->id)) }}">Mostrar</a></li>
                            <li><a href="{{  route('new_order', array('id' => $pc->id)) }}">Orden de Mantenimeinto</a></li>
                            @if(Auth::user()->type=='company')
                                <li><a href="#" pc_id="{{$pc->id}}" data="maintenance" class="dates">Fecha de Mantemiento</a></li>
                                <li><a href="#" pc_id="{{$pc->id}}"data="copy" class="dates">Fecha de copia de seguridad</a></li>
                            @endif

                        </ul>
                    </li>
                </ul>

            </td>


        </tr>
        @endif
    @endforeach




</table>

<div class="pagination">
    {{ $pcs->links() }}
</div>

<script>
    $(document).ready(function(){
        iniciar()
    })

</script>


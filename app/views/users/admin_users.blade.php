
<table class="table">
    <tr class="bg-info">
        <th>Id</th>
        <th>Nombres</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Estado</th>
        <th></th>
    </tr>

@foreach($users as $user)
    <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user->full_name}}</td>
        <td>{{ $user->email}}</td>
        <td>
            @if($user->type=='user_company')
               Usurio
            @elseif($user->type=='company')
                Adminitrador
            @endif

        </td>

        <td>{{ $user->state}}</td>
        <td>
            <button class="btn btn-success btn-xs">Editar</button>
            <button class="btn btn-warning btn-xs">Quitar acceso</button>
        </td>

    </tr>

@endforeach

</table>
@extends('candidates/layout')




@section('content')



<h3>{{ $category->title }}</h3>


       <table  class="table  striped " >

	<tr class="bg-cyan">
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Descripción</th>
		<th>Ver</th>
	</tr>


   @foreach ($category->paginate_candidates as $candidate)


   <tr>
       <td>{{  $candidate->user->full_name  }}</td>
       <td>{{  $candidate->job_type_title  }}</td>
       <td>{{  $candidate->description  }}</td>
       <td><a href="{{ route('candidate', [$candidate->slug, $candidate->id]) }}" class="button info">Ver</a>   </td>

   </tr>

   @endforeach
  


		
       </table>

       <div class="pagination">
        {{ $category->paginate_candidates->links() }}
      </div>


@stop
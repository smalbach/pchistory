@extends('layout')




@section('content')

<p class="description bg-grayLighter padding200">
    <h1>Hire me</h1>
    <h2>Aplicacion clase de mejorandola</h2>

    <a  class="button success" href="{{ route('sign_up') }}">postulate</a>

</p>


<h1 >Ultimos Candidatos</h1>

   

    @foreach ($latest_candidates as $category) 
        <h2 > {{  $category->title }} </h2>
         <table class="table">
            <tr class="bg-cyan">
                    <th>Nombre</th>
                    <th>Tipo de Trabajo</th>
                    <th>Descripción</th>
                    <th>   </th>


            </tr>

            @foreach ($category->candidates as $candidates)
                <tr>
                    <td>{{ $candidates->user->full_name }} </td>
                    <td>{{ $candidates->job_type_title }} </td>
                    <td>{{ $candidates->description }} </td>
                     <td>
                        <a href="{{ route('candidate', [$candidates->slug,$candidates->id]) }}" class="button info">Ver</a>


                    </td>

                </tr>




            @endforeach

   

    </table>
        <p>
            <a href="{{  route('category', [$category->title,$category->id]) }}" class="button info">Ver categoria</a>

        </p>

     @endforeach
@stop



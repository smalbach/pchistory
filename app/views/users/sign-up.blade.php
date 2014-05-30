@extends('layout')




@section('content')


<div class="span6">
    
    {{  Form::open(['route'=>'register','method'=>'POST','role'=>'form'   ]) }}
     <fieldset>






        <legend>Formulario de registro</legend>

         {{ Field::text('full_name') }}

         {{ Field::email('email') }}

         {{ Field::password('password') }}

         {{ Field::password('password_confirmation', ['placeholder'=>'Repite tu clave','data-rule-required'=>'true']) }}





    <br><br><br>
    <input value="Guardar" class="button success" type="submit">



   </fieldset>
{{Form::close()}}





</div>




@stop



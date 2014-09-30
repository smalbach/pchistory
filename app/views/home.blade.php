@extends('layout')




@section('content')

<p class="description bg-grayLighter padding200">
    <h1>Inventory</h1>
    <h2>Hoja de vida de equipos</h2>
</p>
 <!--Hash::make("123456")-->
<div class="well bs-component col-xs-6">

@if(Auth::check())

@else

    {{ Form::open(['route'=>'login','class'=>'form-horizontal','role'=>'form']) }}

        <fieldset>
            <legend>Inicia sesión</legend>


            {{ Field::email('email',null,['class'=>'form-control']) }}
            {{ Field::password('password',['class'=>'form-control']) }}

            @if(Session::has('login_error'))
            <div class="form-group has-error ">
                <label class="control-label col-lg-offset-3" for="inputError">Error de usuario o contraseña</label>

            </div>

            @endif
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-3">

                    <button type="submit" class="btn btn-primary">Iniciar</button>
                </div>
            </div>
        </fieldset>

    {{ Form::close() }}
@endif


</div>

@stop



@extends('layout')




@section('content')

<p class="description bg-grayLighter padding200">
<h1>Pc History</h1>
<h2>Todo sobre tu pc</h2>
<h3>Lista de empresas</h3>




<table class="table table-bordered">
    <tr class="alert-success">
        <td>Nombre</td>
        <td>Identificación</td>
        <td>Dirección</td>
        <td>Teléfono</td>
        <td>Contacto</td>
        <td></td>

    </tr>

    @foreach($companies as $company)
    <tr>
        <td>{{$company->name}}</td>
        <td>{{$company->company_id}}</td>
        <td>{{$company->direction}}</td>
        <td>{{$company->phone}}</td>
        <td>{{$company->contact}}</td>
        <td>
            {{  Form::open(['route'=>'admin_company','method'=>'POST','role'=>'form'   ]) }}

            {{ Field::hidden('company_id',$company->id ) }}
            <button class="btn btn-info">
                Administrar
            </button>

            {{Form::close()}}

        </td>


    </tr>




    @endforeach





</table>





@stop



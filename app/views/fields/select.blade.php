
<div class="form-group">

    {{Form::label($name,$label)}}
    {{ $control}}
    @if ($error)
    <p class="notice marker-on-top bg-orange fg-white" >{{ $error}}</p>
    @endif

</div>

<div class="form-group">


    <div class="col-lg-2  control-labe">
        {{Form::label($name,$label)}}
    </div>

    <div class="col-lg-10">
        {{ $control}}
    </div>

        @if ($error)
        <p class="notice marker-on-top bg-orange fg-white" >{{ $error}}</p>
        @endif




</div>
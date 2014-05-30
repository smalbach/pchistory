
<div class="form-group">


    <div class="col-lg-3">
        {{Form::label($name,$label)}}
    </div>

    <div class="col-lg-9">
        {{ $control}}
    </div>
    <div class="col-lg-12">
        @if ($error)
        <p class="notice marker-on-top bg-orange fg-white" >{{ $error}}</p>
        @endif

    </div>


</div>
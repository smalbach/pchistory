<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('yeti/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('yeti/css/ui/jquery-ui.css') }}">


    <script src="{{ asset('yeti/js/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('yeti/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('yeti/js/ui/jquery-ui-1.10.4.js') }}"></script>
    <script src="{{ asset('yeti/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('yeti/js/lenguaje_validacion.js') }}"></script>


    <style>
        table tr{
            cursor: pointer;
        }

    </style>

</head>
<body class="metro">

<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home')}}">EQ History</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">



    </div>
</div>







<div class="container">
    @yield('content')
</div>




<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48605959-1', 'aikon.co');
    ga('send', 'pageview');

</script>

</body>
</html>
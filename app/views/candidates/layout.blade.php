<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('metro/css/metro-bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('metro/css/metro-bootstrap-responsive.css') }}">

<script src="{{ asset('metro/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('metro/js/jquery/jquery.widget.min.js') }}"></script>
<script src="{{ asset('metro/js/metro.min.js') }}"></script>

</head>
<body class="metro">


<div class="container">

<nav class="navigation-bar dark">
    <nav class="navigation-bar-content">
        <item class="element">...</item>
        <item class="element-divider">...</item>
        ...
        <item class="element">...</item>
    </nav>
</nav>


@yield('content')

</div>

</body>
</html>
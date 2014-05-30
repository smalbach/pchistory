<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('yeti/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('yeti/css/ui/jquery-ui.css') }}">


    <script src="{{ asset('yeti/js/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('yeti/js/bootstrap.min.js') }}"></script>

</head>
<body class="metro">


    <nav class="navigation-bar dark">
	    <nav class="navigation-bar-content">
		    <item class="element">Hire me</item>
		    <item class="element-divider"></item>
		    
		    <item class="element">
			
		     </item>
	    </nav>
    </nav>


<div class="container">





@yield('content')

</div>

</body>
</html>
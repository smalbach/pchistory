<html>
<head>
    <link rel="stylesheet" href="{{ asset('yeti/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('yeti/css/ui/jquery-ui.css') }}">


    <script src="{{ asset('yeti/js/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('yeti/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('yeti/js/ui/jquery-ui-1.10.4.js') }}"></script>
    <script src="{{ asset('yeti/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('yeti/js/lenguaje_validacion.js') }}"></script>


    <style>
        table tr{
            cursor: pointer;
        }
        #loader_gif
        {
            background:transparent url('{{ asset('img/system/ajax-loader.gif') }}') no-repeat center center;
            height: 100px;
            width: 100px;
            position: fixed;
            z-index: 1000;
            left: 50%;
            top: 50%;
            margin: -25px 0 0 -25px;
            transition: all 1s ease;
        }


    </style>

</head>

<body>
<div id="loader_gif" style="display: none" ></div>

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
        <ul class="nav navbar-nav">



            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('pc_list') }}">Listado</a></li>
                    @if(Auth::user()->type=='company')
                        <li><a href="{{ route('pc_add') }}">Nuevo</a></li>

                    @endif
                </ul>
            </li>
            @if(Auth::user()->type=='company')
                <li><a href="{{ route('list_order') }}">Ordenes</a></li>
                <li><a href="{{ route('user_list') }}">Usuarios</a></li>
            @endif
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('pc_maintenances') }}">Fechas de mantenimientos</a></li>
                </ul>
            </li>
        </ul>





        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">{{ Auth::user()->full_name}}</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{$company->name}} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('signout') }}">Cerrar Sesión</a></li>

                </ul>
            </li>
        </ul>
    </div>
</div>







<div class="container">





    @yield('content')

</div>


<script>
    var table_active=null;
    var codigo_sel_row="";
    var data_sel_row="";
    var screenwidth=screen.width-200;
    var screenheight=screen.height-350;

    function set_table(data,div){
        if(!data){
            data="Sin resultados"
            $("#"+div).html(data)
        }else{


            keys=data.reduce(function(keys, element){
                for (key in element) {
                    keys.push(key);
                }
                return keys;
            },[]);

            //keys=keys.split(",")

            Array.prototype.unique=function(a){
                return function(){return this.filter(a)}}(function(a,b,c){return c.indexOf(a,b+1)<0
            });
            th="<thead>"
            keys=keys.unique()
            $.each(keys, function(index) {
                th+="<th>"+ keys[index].toUpperCase()+ "</th>"
            });
            th+="</thead>"
            td="<tbody>"
            $.each(data, function(index,element) {
                td+="<tr onclick='sel_table(this)'>"
                $.each(element,function(index2,element2){

                    td+="<td data='"+index2+"'>"+element2+"</td>"
                })
                td+="</tr>"

            });
            td+="</tbody>"
            table="<table class='table table-hover table-nomargin table-colored-header'>"
            table+=th+td+"</table>"
            //alert(table)
            $("#"+div).html(table)
        }
    }


    function sel_table(obj){
        $(obj).parent("tbody").find("tr").each(function() {
            $(this).removeClass('info');

        })
        row_active=obj

        $(obj).addClass('info')

    }


    function select_row(){
        data_sel_row="";
        $(row_active).find("td").each(function() {
            switch($(this).attr("data")){
                case "id":
                    codigo_sel_row=$(this).text()
                    break;
                default:
                    data_sel_row+=" "+$(this).text()
                    break
            }

        })
        set_text();
    }



    function set_text(){
        switch(table_active){
            case "trademark":

                $("#trademark").val(data_sel_row)

                $("#id_trademark").val(codigo_sel_row)

                break
            case "operative_system":
                $("#operative_system").val(data_sel_row)

                $("#id_operative_system").val(codigo_sel_row)

                break

            case "searh_accesory":
                $("#dialog_add_accesory_value").dialog("open")
                $("#accesory_id").val(codigo_sel_row)
                $("#lbl_accesory").text(data_sel_row)
                break


            case "searh_software":
                $("#dialog_add_software_value").dialog("open")
                $("#software_id").val(codigo_sel_row)
                $("#lbl_software").text(data_sel_row)
            break

            case "searh_device":
                $("#dialog_add_device_value").dialog("open")
                $("#device_id").val(codigo_sel_row)
                $("#lbl_device").text(data_sel_row)
            break


            case "support":

                $("#support_text").val(data_sel_row)

                $("#support_id").val(codigo_sel_row)

                break




        }


    }



    function setDialog(id){


        $("#"+id).dialog({
            autoOpen:false,
            modal: true,
            width: screenwidth,
            maxWidth: 1000,
            height: screenheight,
            position: { my: "center", at: "center top" },
            buttons: {

                Seleccionar: function(){
                    select_row()
                    $( this ).dialog( "close" );
                },
                Cancelar: function() {
                    $( this ).dialog( "close" );

                }
            },
            show: {
                effect: "blind",
                duration: 300
            },
            hide: {
                effect: "fade",
                duration: 300
            },
            closeOnEscape: false,
            open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); }
        })

    }


    function set_loader(div){
        $("#"+div).empty();

     }

    function show_frm(show,hide){
        $("#"+hide).effect("clip",100,function(){
            $("#"+show).css("display","block")
            $("#"+show).effect("slide",100)
        })
    }

    function hide_frm(show,hide){
        $("#"+hide).effect("clip",100,function(){
            $("#"+show).effect("slide",100)
        })
    }

    $(document).ajaxStart(function(){
        $('#loader_gif').show()

    })
    $(document).ajaxStop(function(){

        $('#loader_gif').hide();
    });



    $.ajaxSetup ({
        cache: false
    });
</script>




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
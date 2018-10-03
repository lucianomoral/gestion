<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Control Partner</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js"></script>
    <script src="../js/site.js"></script>
    <script src="../js/factories/novedadesFactory.js"></script>
    <script src="../js/model/novedad.js"></script>
    <!-- Bootstrap core CSS -->
    <!--link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="../views/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <!--li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li-->
                <li>
                    <a href="#" class="renderView"> <span class="glyphicon glyphicon-search"></span> Buscar</a>
                </li>
                <li>
                    <a href="#" class="renderView" data-view="novedades"> <span class="glyphicon glyphicon-pencil"></span> Novedades </a>
                </li>
                <li>
                    <a href="#" class="renderView" data-view="movimientos"> <span class="glyphicon glyphicon-share-alt"></span>  Movimientos</a>
                </li>
                <li>
                    <a href="#" class="renderView"> <span class="glyphicon glyphicon-wrench"></span> Datos maestros</a>
                </li>
                <li>
                    <a href="#" class="renderView"> <span class="glyphicon glyphicon-equalizer"></span> Consultas</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div>
            <div class="container-fluid">
                <div id="content">
                    <h1>Gestion partner</h1>
                    <h3>BIENVENIDO</h3>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--script src="views/vendor/jquery/jquery.min.js"></script>
    <script src="views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script-->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if ($("#hideshowmenu").hasClass("glyphicon-arrow-left")){
            $("#hideshowmenu").removeClass("glyphicon-arrow-left").addClass("glyphicon-arrow-right");
        } else {
            $("#hideshowmenu").removeClass("glyphicon-arrow-right").addClass("glyphicon-arrow-left");
        }
    });
    </script>

</body>

</html>

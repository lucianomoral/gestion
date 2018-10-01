<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Control Partner</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="js/app/site.js"></script>
    <!-- Bootstrap core CSS -->
    <!--link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="views/css/simple-sidebar.css" rel="stylesheet">

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
                    <a href="#" class="renderView"> <span class="glyphicon glyphicon-pencil"></span> Novedades </a>
                </li>
                <li>
                    <a href="#" class="renderView"> <span class="glyphicon glyphicon-share-alt"></span>  Movimientos</a>
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
        <div id="content">
            <div class="container-fluid">
                <h1>Gestion partner</h1>
                <!--p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p-->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td colspan="2">
                                <button href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                                    <span id = "hideshowmenu" class="glyphicon glyphicon-arrow-left"></span>
                                </button>
                                <button class="btn btn-success">
                                    <span id = "hideshowmenu" class="glyphicon glyphicon-plus"></span> Nuevo
                                </button>
                                <button class="btn btn-danger">
                                    <span id = "hideshowmenu" class="glyphicon glyphicon-trash"></span> Eliminar
                                </button>
                                <button class="btn btn-info">
                                    <span id = "hideshowmenu" class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                        </tr>
                        {$i = 1}
                        {section name=titulares loop=$titulares}
                        <tr>
                            <td>{$titulares[$i]->id}</td>
                            <td>{$titulares[$i]->nombre}</td>
                            {$i = $i + 1}
                        </tr>
                        {/section}
                    </table>
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

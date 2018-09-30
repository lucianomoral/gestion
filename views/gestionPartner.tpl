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
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
                <!--p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p-->
            
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Luciano</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Gustavo</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Facundo</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Isabel</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cristina</td>
                    </tr>
                </table>

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
    });
    </script>

</body>

</html>

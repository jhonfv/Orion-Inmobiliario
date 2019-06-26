<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#F16835">

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles_menu.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Inicio</title>
    </head>
    <body>
    
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/menu.js"></script>
        <!--****************MENU***********************-->
        <div class="wrapper">
        <!-- Sidebar -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fas fa-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <img width="50px" height="50px" src="https://image.flaticon.com/icons/svg/149/149071.svg">
                </div>          
                <ul class="list-unstyled components ">
                    <?php echo("<h4 class='nombre'>".$_SESSION['usuario']['nombre']."<br><h4>")?>
                    <?php echo("<h4 class='nombre'>".$_SESSION['usuario']['cedula']."<h4>")?>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Recursos</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="https://bootstrapious.com/p/bootstrap-sidebar">Menu lateral</a>
                            </li>
                            <li>
                                <a href="https://bootstrapious.com/p/bootstrap-products-list">Bloque de inmueble</a>
                            </li>
                            <li>
                                <a href="../admin/">Admin</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Clientes</a>
                    </li>
                    <li>
                        <a href="#">Favoritos</a>
                    </li>
                    <li>
                        <a href="#">Calendario</a>
                    </li>
                </ul>
                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="../index.php" class="download">Cerrar Sesion</a>
                    </li>
                    <!--<li>
                        <a href="../index.php" class="article">Cerrar Sesion</a>
                    </li>-->
                </ul>
            </nav>

            <!-- Page Content -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                        <h5 class="mt-0 font-weight-bold mb-2">Orion Inmobliaria </h5> 
                    </div>
                </nav>
            </div>
            <!-- Dark Overlay element -->
            <div class="overlay"></div>
        </div>
        <!--**********End MENU**************-->
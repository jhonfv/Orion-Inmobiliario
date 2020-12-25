<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
        <link rel="stylesheet" href="../agente/css/styles_menu.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#F16835">

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles_menu.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Inicio</title>
    </head>
    <body>
    
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        <div style="margin-left: 17%; margin-right: 17%; margin-top: 100px;">    
        </div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
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
    <?php session_start() ?>
    <?php 
        //var_dump($_SESSION['usuario']);
        // die();
    ?>
        <?php if (isset($_SESSION['usuario'])) {
        }
        else{
            header("Location:../index.php");
        }
    ?>


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
                            <a href="#">Home 3</a>
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

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/menu.js"></script>
    
    <!--**********End MENU**************-->
    <div style="margin: 100px 20px 0 20px; display: block;">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium nulla optio reprehenderit enim, voluptate pariatur laudantium, molestiae repudiandae unde numquam iusto a eum. Qui id, accusantium eveniet voluptatem nostrum!
        </p>
    </div>
    <!--********Inmueble********-->
    <div class="row" style="margin-right: 15px; margin-left: 15px;">
    <div class="col-lg-8 mx-auto" >

      <!-- List group-->
      <ul class="list-group shadow">
        <!-- list group item -->
        <li class="list-group-item">

          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Apartamento Bonito</h5>              
              <p class="font-italic text-muted mb-0 small">Estado: Nuevo</p>
              <p class="font-italic text-muted mb-0 small">fin: Venta</p>
              <p class="font-italic text-muted mb-0 small">Ubicacion: Floridablanca</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">Valor: $220'000.000</h6>
              </div>
            </div><img src="https://cdn.pixabay.com/photo/2016/07/26/18/30/kitchen-1543493_960_720.jpg" alt="Foto inmueble" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->

      </ul>
      <!-- End -->
    </div>
  </div>
</div>
<!--******End Inmueble******-->
<!--********Inmueble********-->
    <div class="row" style="margin-right: 15px; margin-left: 15px;">
    <div class="col-lg-8 mx-auto" >

      <!-- List group-->
      <ul class="list-group shadow">
        <!-- list group item -->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Casa campestre</h5>              
              <p class="font-italic text-muted mb-0 small">Estado: Usado</p>
              <p class="font-italic text-muted mb-0 small">Fin: Alquiler</p>
              <p class="font-italic text-muted mb-0 small">Ubicacion: Piedecuesta</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">Valor: $1'200.000</h6>
              </div>
            </div><img src="https://cdn.pixabay.com/photo/2013/08/30/12/56/holiday-house-177401_960_720.jpg" alt="Foto inmueble" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->


        </li>
        <!-- End -->

      </ul>
      <!-- End -->
    </div>
  </div>
</div>




</body>
</html>
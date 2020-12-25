
        <?php 
            require_once ('inmuebles.php');
            require_once ("../helps/user_validation.php");
            require_once ('../helps/user_header.php');            
        ?>
        
        <!--********Form Search********-->
        <div class="row" style="margin-right: 15px; margin-left: 15px;">
            <div class="col-lg-8 mx-auto" >
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item -->
                    <li class="list-group-item">
                        <h2>Buscar:</h2>
                        <!-- Custom content-->
                        <form action="index.php" method="get">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ubicacion</button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            </div>
                            
                            <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Valor</span>
                                  </div>
                                  <input type="text" aria-label="First name" class="form-control" placeholder="Min">
                                  <input type="text" aria-label="Last name" class="form-control" placeholder="Max">
                            </div>
                            <!-- End -->

                            <button type="submit" class="btn btn-primary mb-2 form-control " style="margin-top: 10px;">Buscar</button>
                        </form>
                    </li>
                    <!-- End -->
                </ul>
                <!-- End -->
            </div>
        </div>
        <!--******End Form Search******-->
        <!--********Inmueble********-->
        <?php 
        $sql="select * from Inmueble";
        $data= mysqli_query($db, $sql);
        //$Inmueble= mysqli_fetch_assoc($data);
        while($inmueble=mysqli_fetch_array($data)):?>
            <!--_____________________________________________________-->
            <div class="row" style="margin-right: 15px; margin-left: 15px;">
            <div class="col-lg-8 mx-auto" >
                 <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item -->
                    <?php echo("<a href='../inmueble/index.php?codigo=".$inmueble['Codigo_Inmueble']."'>'")?>
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                      <?php echo("<h5 class='mt-0 font-weight-bold mb-2'>".$inmueble['Nombre']."</h5>") ?>
                      <p class="font-italic text-muted mb-0 small">Estado: Nuevo</p>
                      <p class="font-italic text-muted mb-0 small">fin: Venta</p>
                      <p class="font-italic text-muted mb-0 small">Ubicacion: Floridablanca</p>
                      <div class="d-flex align-items-center justify-content-between mt-1">
                        <?php echo("<h6 class='font-weight-bold my-2'>Valor: $".$inmueble['Valor']."</h6>") ?>
                      </div>
                            </div>
                            <img src="https://cdn.pixabay.com/photo/2016/07/26/18/30/kitchen-1543493_960_720.jpg" alt="Foto inmueble" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div>
                        <!-- End -->
                    </li></a>
                    <!-- End -->
                </ul>
                <!-- End -->
            </div>
        </div>
        <!--______________________________________________________        -->
        <?php
        endwhile;
        ?>
        <!--******End Inmueble******-->
    </body>
</html>
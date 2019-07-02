<?php
require_once("../conexion.php");
require_once("../helps/user_validation.php");
require_once("../helps/user_header.php");
$codigo=$_GET['codigo'];
$sql="select * from Inmueble where Codigo_Inmueble='$codigo'";
//var_dump($sql);
$data=mysqli_query($db, $sql);
$inmueble=mysqli_fetch_array($data);?>
<section>
    <div>
        <p>
            Codigo: <?php echo($inmueble["Codigo_Inmueble"]);?>
        </p>
        <p>
            Descripcion: <?php echo($inmueble["Descripcion"]);?>
        </p>
        <p>
            <?php echo($inmueble["Area"]);?>
        </p>
    </div>
</section>
</body>
</html>                
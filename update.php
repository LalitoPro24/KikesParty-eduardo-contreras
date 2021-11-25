<?php

include("conexion.php");
$con=conectar();

$idPaquete=$_POST['idPaquete'];
$nombre=$_POST['nombre'];
$cantidadSillas=$_POST['cantidadSillas'];
$cantidadMesas=$_POST['cantidadMesas'];
$platillosdTiempos=$_POST['platillosdTiempos'];
$tipoManteleria=$_POST['tipoManteleria'];
$precio=$_POST['precio'];

$sql="UPDATE Paquete SET  nombre='$nombre',cantidadSillas='$cantidadSillas',cantidadMesas='$cantidadMesas',platillosdTiempos='$platillosdTiempos',tipoManteleria='$tipoManteleria',precio='$precio' WHERE idPaquete='$idPaquete'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Paquete.php");
    }
?>
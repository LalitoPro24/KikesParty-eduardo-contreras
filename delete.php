<?php

include("conexion.php");
$con=conectar();

$idPaquete=$_GET['id'];

$sql="DELETE FROM Paquete  WHERE idPaquete='$idPaquete'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Paquete.php");
    }
?>

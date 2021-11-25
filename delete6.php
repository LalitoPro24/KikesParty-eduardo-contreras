<?php

include("conexion.php");
$con=conectar();

$idCuadrilla=$_GET['id'];

$sql="DELETE FROM Cuadrilla  WHERE idCuadrilla='$idCuadrilla'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cuadrilla.php");
    }
?>

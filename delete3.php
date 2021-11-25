<?php

include("conexion.php");
$con=conectar();

$idEmpleado=$_GET['id'];

$sql="DELETE FROM Empleado  WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empleado.php");
    }
?>

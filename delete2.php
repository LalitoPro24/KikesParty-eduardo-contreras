<?php

include("conexion.php");
$con=conectar();

$idSalon=$_GET['id'];

$sql="DELETE FROM Salon  WHERE idSalon='$idSalon'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Salon.php");
    }
?>

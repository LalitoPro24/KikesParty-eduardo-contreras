<?php

include("conexion.php");
$con=conectar();

$idJornada=$_GET['id'];

$sql="DELETE FROM Jornada  WHERE idJornada='$idJornada'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Jornada.php");
    }
?>

<?php

include("conexion.php");
$con=conectar();

$idEvento=$_GET['id'];

$sql="DELETE FROM Evento  WHERE idEvento='$idEvento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Evento.php");
    }
?>

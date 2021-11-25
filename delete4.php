<?php

include("conexion.php");
$con=conectar();

$idCliente=$_GET['id'];

$sql="DELETE FROM Cliente  WHERE idCliente='$idCliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cliente.php");
    }
?>

<?php
include("conexion.php");
$con=conectar();


$idEvento=$_POST['idEvento'];
$fecha=$_POST['fecha'];
$idCuadrilla=$_POST['idCuadrilla'];
$idCliente=$_POST['idCliente'];
$idPaquete=$_POST['idPaquete'];
$idSalon=$_POST['idSalon'];
$total=$_POST['total'];

$sql="INSERT INTO Evento VALUES('$idEvento','$fecha','$idCuadrilla','$idCliente','$idPaquete','$idSalon','$total')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: Evento.php");
    
}else {
}
?>
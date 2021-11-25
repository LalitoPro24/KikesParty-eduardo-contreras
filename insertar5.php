<?php
include("conexion.php");
$con=conectar();

$idJornada=$_POST['idJornada'];
$horaEntrada=$_POST['horaEntrada'];
$horaSalida=$_POST['horaSalida'];
$turno=$_POST['turno'];

$sql="INSERT INTO Jornada VALUES('$idJornada','$horaEntrada','$horaSalida','$turno')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: Jornada.php");
    
}else {
}
?>
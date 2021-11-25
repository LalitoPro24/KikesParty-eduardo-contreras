<?php
include("conexion.php");
$con=conectar();

$idCliente=$_POST['idCliente'];
$nombre=$_POST['nombre'];
$apPaterno=$_POST['apPaterno'];
$apMaterno=$_POST['apMaterno'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$exterior=$_POST['exterior'];
$interior=$_POST['interior'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="INSERT INTO Cliente VALUES('$idCliente','$nombre','$apPaterno','$apMaterno','$calle','$colonia','$exterior','$interior','$municipio','$estado','$telefono','$email')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: Cliente.php");
    
}else {
}
?>
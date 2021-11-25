<?php
include("conexion.php");
$con=conectar();

$idSalon=$_POST['idSalon'];
$nombre=$_POST['nombre'];
$calle=$_POST['calle'];
$exterior=$_POST['exterior'];
$interior=$_POST['interior'];
$colonia=$_POST['colonia'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$capacidad=$_POST['capacidad'];
$telefono=$_POST['telefono'];
$paginaWeb=$_POST['paginaWeb'];
$contactoFacebook=$_POST['contactoFacebook'];
$cajonEstacionamiento=$_POST['cajonEstacionamiento'];
$precio=$_POST['precio'];

$sql="INSERT INTO Salon VALUES('$idSalon','$nombre','$calle','$exterior','$interior','$colonia','$municipio','$estado','$capacidad','$telefono','$paginaWeb','$contactoFacebook','$cajonEstacionamiento','$precio')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: Salon.php");
    
}else {
}
?>
<?php
include("conexion.php");
$con=conectar();

$idCuadrilla=$_POST['idCuadrilla'];
$nombre=$_POST['nombre'];
$cantidadPersona=$_POST['cantidadPersona'];
$precio=$_POST['precio'];
$idJornada=$_POST['idJornada'];
$idEmpleado=$_POST['idEmpleado'];

$sql="INSERT INTO Cuadrilla VALUES('$idCuadrilla','$nombre','$cantidadPersona','$precio','$idJornada','$idEmpleado')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: Cuadrilla.php");
    
}else {
}
?>
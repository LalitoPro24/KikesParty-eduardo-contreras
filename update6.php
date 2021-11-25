<?php

include("conexion.php");
$con=conectar();

$idCuadrilla=$_POST['idCuadrilla'];
$nombre=$_POST['nombre'];
$cantidadPersona=$_POST['cantidadPersona'];
$precio=$_POST['precio'];
$idJornada=$_POST['idJornada'];
$idEmpleado=$_POST['idEmpleado'];

$sql="UPDATE Cuadrilla SET  nombre='$nombre',cantidadPersona='$cantidadPersona',precio='$precio',idJornada='$idJornada',idEmpleado='$idEmpleado' WHERE idCuadrilla='$idCuadrilla'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cuadrilla.php");
    }
?>
<?php

include("conexion.php");
$con=conectar();

$idEmpleado=$_POST['idEmpleado'];
$nombre=$_POST['nombre'];
$apPaterno=$_POST['apPaterno'];
$apMaterno=$_POST['apMaterno'];
$curp=$_POST['curp'];
$rfc=$_POST['rfc'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$exterior=$_POST['exterior'];
$interior=$_POST['interior'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="UPDATE Empleado SET  nombre='$nombre',apPaterno='$apPaterno',apMaterno='$apMaterno',curp='$curp', rfc='$rfc',calle='$calle',colonia='$colonia',exterior='$exterior',interior='$interior',municipio='$municipio',estado='$estado',telefono='$telefono',email='$email' WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empleado.php");
    }
?>
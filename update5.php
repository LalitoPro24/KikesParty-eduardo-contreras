<?php

include("conexion.php");
$con=conectar();

$idJornada=$_POST['idJornada'];
$horaEntrada=$_POST['horaEntrada'];
$horaSalida=$_POST['horaSalida'];
$turno=$_POST['turno'];

$sql="UPDATE Jornada SET  horaEntrada='$horaEntrada',horaSalida='$horaSalida',turno='$turno' WHERE idJornada='$idJornada'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Jornada.php");
    }
?>
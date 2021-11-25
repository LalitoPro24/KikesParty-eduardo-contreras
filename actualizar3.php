<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Empleado WHERE idEmpleado='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update3.php" method="POST">
                                <input type="number" class="form-control mb-3" name="idEmpleado" placeholder="idEmpleado" value="<?php echo $row['idEmpleado']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apPaterno" placeholder="<apPaterno" value="<?php echo $row['apPaterno']  ?>">
                                <input type="text" class="form-control mb-3" name="apMaterno" placeholder="<apMaterno" value="<?php echo $row['apMaterno']  ?>">
                                <input type="text" class="form-control mb-3" name="curp" placeholder="curp" value="<?php echo $row['curp']  ?>">
                                <input type="text" class="form-control mb-3" name="rfc" placeholder="rfc" value="<?php echo $row['rfc']  ?>">
                                <input type="text" class="form-control mb-3" name="calle" placeholder="calle" value="<?php echo $row['calle']  ?>">
                                 <input type="text" class="form-control mb-3" name="colonia" placeholder="colonia" value="<?php echo $row['colonia']  ?>">
                                 <input type="text" class="form-control mb-3" name="exterior" placeholder="exterior" value="<?php echo $row['exterior']  ?>">
                                <input type="text" class="form-control mb-3" name="interior" placeholder="interior" value="<?php echo $row['interior']  ?>">
                                <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio" value="<?php echo $row['municipio']  ?>">
                                <input type="text" class="form-control mb-3" name="estado" placeholder="estado" value="<?php echo $row['estado']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>                    
                </div>
    </body>
</html>
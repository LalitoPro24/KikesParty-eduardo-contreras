<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Paquete WHERE idPaquete='$id'";
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
                    <form action="update.php" method="POST">
                                <input type="text" class="form-control mb-3" name="idPaquete" placeholder="idPaquete" value="<?php echo $row['idPaquete']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                    
                                
                                
                                <input type="text" class="form-control mb-3" name="cantidadSillas" placeholder="cantidadSillas" value="<?php echo $row['cantidadSillas']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidadMesas" placeholder="cantidadMesas" value="<?php echo $row['cantidadMesas']  ?>">
                                <input type="text" class="form-control mb-3" name="platillosdTiempos" placeholder="platillosdTiempos" value="<?php echo $row['platillosdTiempos']  ?>">
                                <input type="text" class="form-control mb-3" name="tipoManteleria" placeholder="tipoManteleria" value="<?php echo $row['tipoManteleria']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
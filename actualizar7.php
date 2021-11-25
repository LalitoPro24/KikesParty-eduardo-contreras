<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Evento WHERE idEvento='$id'";
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
                    <form action="update7.php" method="POST">
                                <input type="number" class="form-control mb-3" name="idEvento" placeholder="idEvento" value="<?php echo $row['idEvento']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="idCuadrilla" placeholder="idCuadrilla" value="<?php echo $row['idCuadrilla']  ?>">
                                <input type="text" class="form-control mb-3" name="idCliente" placeholder="idCliente" value="<?php echo $row['idCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="idPaquete" placeholder="idPaquete" value="<?php echo $row['idPaquete']  ?>">
                                <input type="text" class="form-control mb-3" name="idSalon" placeholder="idSalon" value="<?php echo $row['idSalon']  ?>">
                                <input type="text" class="form-control mb-3" name="total" placeholder="total" value="<?php echo $row['total']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>                    
                </div>
    </body>
</html>
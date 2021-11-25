<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Paquete";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Kikes party</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos Paquetes</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idPaquete" placeholder="id Paquete" required>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
                                    <input type="number" class="form-control mb-3" name="cantidadSillas" placeholder="cantidad de Sillas" required>
                                    <input type="number" class="form-control mb-3" name="cantidadMesas" placeholder="cantidad de Mesas" required>
                                    <input type="text" class="form-control mb-3" name="platillosdTiempos" placeholder="platillos de Tiempos" required>
                                    <input type="text" class="form-control mb-3" name="tipoManteleria" placeholder="tipo Manteleria" required>
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio" required>
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="index.html" class="btn btn-danger">Regresar al menu</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idPaquete</th>
                                        <th>Nombre</th>
                                        <th>Cantidad de sillas</th>
                                        <th>Cantidad de mesas</th>
                                        <th>Codigo</th>
                                        <th>platillos de tiempo</th>
                                        <th>Tipo mateleria</th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idPaquete']?></th> 
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['cantidadSillas']?></th>
                                                <th><?php  echo $row['cantidadMesas']?></th> 
                                                <th><?php  echo $row['platillosdTiempos']?></th> 
                                                <th><?php  echo $row['tipoManteleria']?></th>   
                                                <th><?php  echo $row['precio']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['idPaquete'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idPaquete'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>

                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
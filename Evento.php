<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Evento";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Evento</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        
    </head>
    <body>
            <div class="container mt-5" ba>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos de Evento</h1>
                                <form action="insertar7.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idEvento" placeholder="idEvento" required>
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha" required>
                                    <input type="number" class="form-control mb-3" name="idCuadrilla" placeholder="idCuadrilla" required>
                                    <input type="number" class="form-control mb-3" name="idCliente" placeholder="idCliente" required> 
                                    <input type="text" class="form-control mb-3" name="idPaquete" placeholder="idPaquete" required> 
                                    <input type="text" class="form-control mb-3" name="idSalon" placeholder="idSalon" required>
                                    <input type="text" class="form-control mb-3" name="total" placeholder="total" required>

                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="index.html" class="btn btn-danger">Regresar al menu</a></th>
                                    <th><a href="Cuadrilla.php" class="btn btn-danger"> Cuadrilla</a></th>
                                    <th><a href="Cliente.php" class="btn btn-danger"> Cliente</a></th>
                                    <th><a href="idPaquete.php" class="btn btn-danger"> Paquete</a></th>
                                    <th><a href="Salon.php" class="btn btn-danger">Salon</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idEvento</th>
                                        <th>Fecha</th>
                                        <th>ID cuadrilla</th>
                                        <th>ID Cliente</th>
                                        <th>ID Paquete</th>
                                        <th>ID Salon</th>
                                        <th>Total </th>
                                    </tr>
                                </thead>

                                <tbody>
                                      <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idEvento']?></th> 
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['idCuadrilla']?></th>
                                                <th><?php  echo $row['idCliente']?></th> 
                                                <th><?php  echo $row['idPaquete']?></th> 
                                                <th><?php  echo $row['idSalon']?></th> 
                                                <th><?php  echo $row['total']?></th> 
                                                <th></th> 
                                                <th></th> 
                                                <th><a href="actualizar7.php?id=<?php echo $row['idEvento'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete7.php?id=<?php echo $row['idEvento'] ?>" class="btn btn-danger">
                                                Eliminar</a></th>

                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idCuadrilla']?></th> 
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['cantidadPersona']?></th>
                                                <th><?php  echo $row['precio']?></th> 
                                                <th><?php  echo $row['idJornada']?></th> 
                                                <th><?php  echo $row['idEmpleado']?></th> 
                                                <th></th> 
                                                <th></th> 
                                                <th><a href="actualizar6.php?id=<?php echo $row['idCuadrilla'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete6.php?id=<?php echo $row['idCuadrilla'] ?>" class="btn btn-danger">
                                                Eliminar</a></th>

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
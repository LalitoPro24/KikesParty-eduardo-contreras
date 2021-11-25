<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Cuadrilla";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cuadrilla</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        
    </head>
    <body>
            <div class="container mt-5" ba>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos Cuadrilla</h1>
                                <form action="insertar6.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idCuadrilla" placeholder="idCuadrilla" required>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
                                    <input type="number" class="form-control mb-3" name="cantidadPersona" placeholder="cantidadPersona" required>
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="precio" required> 
                                    <input type="text" class="form-control mb-3" name="idJornada" placeholder="idJornada" required> 
                                    <input type="text" class="form-control mb-3" name="idEmpleado" placeholder="idEmpleado" required>
                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="index.html" class="btn btn-danger">Regresar al menu</a></th>
                                    <th><a href="Jornada.php" class="btn btn-danger">Tabla Jornada</a></th>
                                    <th><a href="Empleado.php" class="btn btn-danger">Tabla Empleado</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idCuadrilla</th>
                                        <th>Nombre</th>
                                        <th>Cantidad Personas</th>
                                        <th>Precio</th>
                                        <th>id Jornada</th>
                                        <th>id Empleado</th>
                                    </tr>
                                </thead>

                                <tbody>
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
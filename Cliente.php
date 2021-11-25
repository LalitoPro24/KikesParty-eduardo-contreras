<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Cliente";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        
    </head>
    <body>
            <div class="container mt-5" ba>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos Cliente</h1>
                                <form action="insertar4.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idCliente" placeholder="idCliente" required>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
                                    <input type="text" class="form-control mb-3" name="apPaterno" placeholder="Apellido paterno" required>
                                    <input type="text" class="form-control mb-3" name="apMaterno" placeholder="Apellido Materno" required>                                
                                    <input type="text" class="form-control mb-3" name="calle" placeholder="calle" required>
                                    <input type="text" class="form-control mb-3" name="colonia" placeholder="colonia" required>
                                    <input type="text" class="form-control mb-3" name="exterior" placeholder="exterior" required>
                                    <input type="text" class="form-control mb-3" name="interior" placeholder="interior" required>                                    
                                    <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio" required>
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="estado" required>
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" required>
                                    <input type="text" class="form-control mb-3" name="email" placeholder="email" required>
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="index.html" class="btn btn-danger">Regresar al menu</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Cliente</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Calle</th>
                                        <th>Colonia</th>
                                        <th>Exterior</th>
                                        <th>Interior</th>
                                        <th>Municipio</th>
                                        <th>Estado</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>

                                <tbody>
                                      <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idCliente']?></th> 
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apPaterno']?></th>
                                                <th><?php  echo $row['apMaterno']?></th> 
                                                <th><?php  echo $row['calle']?></th> 
                                                <th><?php  echo $row['colonia']?></th>
                                                <th><?php  echo $row['exterior']?></th>
                                                <th><?php  echo $row['interior']?></th> 
                                                <th><?php  echo $row['municipio']?></th> 
                                                <th><?php  echo $row['estado']?></th>    
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['email']?></th> 
                                                <th></th> 
                                                <th></th> 
                                                <th><a href="actualizar4.php?id=<?php echo $row['idCliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete4.php?id=<?php echo $row['idCliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
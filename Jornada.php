<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Jornada";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Jornada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        
    </head>
    <body>
            <div class="container mt-5" ba>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos Jornada</h1>
                                <form action="insertar5.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idJornada" placeholder="idJornada" required>
                                    <input type="text" class="form-control mb-3" name="horaEntrada" placeholder="horaEntrada" required>
                                    <input type="text" class="form-control mb-3" name="horaSalida" placeholder="horaSalida" required>
                                    <input type="text" class="form-control mb-3" name="turno" placeholder="Turno" required> 
                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="index.html" class="btn btn-danger">Regresar al menu</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Jornada</th>
                                        <th>hora Entrada</th>
                                        <th>Hora Salida</th>
                                        <th>Turno</th>
                                    </tr>
                                </thead>

                                <tbody>
                                      <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idJornada']?></th> 
                                                <th><?php  echo $row['horaEntrada']?></th>
                                                <th><?php  echo $row['horaSalida']?></th>
                                                <th><?php  echo $row['turno']?></th> 
                                                <th></th> 
                                                <th></th> 
                                                <th><a href="actualizar5.php?id=<?php echo $row['idJornada'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete5.php?id=<?php echo $row['idJornada'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
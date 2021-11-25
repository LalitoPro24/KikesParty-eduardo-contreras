<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Salon";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Salon</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos Salon</h1>
                                <form action="insertar2.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idSalon" placeholder="idSalon" required>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required="">
                                    <input type="text" class="form-control mb-3" name="calle" placeholder="calle">
                                    <input type="text" class="form-control mb-3" name="exterior" placeholder="exterior" required>
                                    <input type="text" class="form-control mb-3" name="interior" placeholder="interior" required>
                                    <input type="text" class="form-control mb-3" name="colonia" placeholder="colonia" required>
                                    <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio" required>
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="estado" required>
                                    <input type="number" class="form-control mb-3" name="capacidad" placeholder="capacidad" required>
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" required>
                                    <input type="text" class="form-control mb-3" name="paginaWeb" placeholder="paginaWeb" required>
                                    <input type="text" class="form-control mb-3" name="contactoFacebook" placeholder="contactoFacebook" required>
                                    <input type="number" class="form-control mb-3" name="cajonEstacionamiento" placeholder="cajonEstacionamiento" required>
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="precio" required>
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <th><a href="index.html" class="btn btn-danger">Regresar al menu</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idSalon</th>
                                        <th>Nombre</th>
                                        <th>Calle</th>
                                        <th>exterior</th>
                                        <th>interior</th>
                                        <th>colonia</th>
                                        <th>municipio</th>
                                        <th>estado</th>
                                        <th>capacidad</th>
                                        <th>Telefono</th>
                                        <th>pagina web</th>
                                        <th>contacto Facebook</th>
                                        <th>Cajon estacionamiento</th>
                                        <th>precio</th>
                                    </tr>
                                </thead>

                                <tbody>
                                      <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idSalon']?></th> 
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['calle']?></th>
                                                <th><?php  echo $row['exterior']?></th> 
                                                <th><?php  echo $row['interior']?></th> 
                                                <th><?php  echo $row['colonia']?></th>
                                                <th><?php  echo $row['municipio']?></th> 
                                                <th><?php  echo $row['estado']?></th>
                                                <th><?php  echo $row['capacidad']?></th>
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><?php  echo $row['paginaWeb']?></th> 
                                                <th><?php  echo $row['contactoFacebook']?></th>    
                                                <th><?php  echo $row['cajonEstacionamiento']?></th>
                                                <th><?php  echo $row['precio']?></th>                                     
                                                <th><a href="actualizar2.php?id=<?php echo $row['idSalon'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete2.php?id=<?php echo $row['idSalon'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
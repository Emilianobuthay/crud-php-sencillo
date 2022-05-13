<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    $sqll="SELECT *  FROM roles";
    $queryy=mysqli_query($con,$sqll);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                <a href="indextorta.php" class="btn btn-info">Grafico torta</a>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar en Tabla Usuarios</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                                    <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="NOMBRE">
                                    <input type="text" class="form-control mb-3" name="EDAD" placeholder="EDAD">
                                    <input type="text" class="form-control mb-3" name="SEXO" placeholder="SEXO">
                                    <input type="text" class="form-control mb-3" name="ROLID" placeholder="ROLID">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
                        <div class="col-md-3">
                            <h1>Agregar en Tabla Roles</h1>
                                <form action="insertar2.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ROLID" placeholder="ROLID">
                                    <input type="text" class="form-control mb-3" name="DESCRIPCION" placeholder="DESCRIPCION">
                                   
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>EDAD</th>
                                        <th>SEXO</th>
                                        <th>ROLID</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['ID']?></th>
                                                <th><?php  echo $row['NOMBRE']?></th>
                                                <th><?php  echo $row['EDAD']?></th>
                                                <th><?php  echo $row['SEXO']?></th>
                                                <th><?php  echo $row['ROLID']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ROLID</th>
                                        <th>DESCRIPCION</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($queryy)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['ROLID']?></th>
                                                <th><?php  echo $row['DESCRIPCION']?></th>
                                                   
                                                <th><a href="actualizar2.php?id=<?php echo $row['ROLID'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete2.php?id=<?php echo $row['ROLID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
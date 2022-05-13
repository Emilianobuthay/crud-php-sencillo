<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE ID='$id'";
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
                    
                                <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="NOMBRE" value="<?php echo $row['NOMBRE']  ?>">
                                <input type="text" class="form-control mb-3" name="EDAD" placeholder="EDAD" value="<?php echo $row['EDAD']  ?>">
                                <input type="text" class="form-control mb-3" name="SEXO" placeholder="SEXO" value="<?php echo $row['SEXO']  ?>">
                                <input type="text" class="form-control mb-3" name="ROLID" placeholder="ROLID" value="<?php echo $row['ROLID']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
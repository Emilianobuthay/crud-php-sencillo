<?php
 include("conexion.php");
 $con=conectar();

 $sql="SELECT SEXO, COUNT(SEXO) FROM usuarios GROUP BY SEXO";
 $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Document</title>
</head>
<body>                     
    <div id="chart"></div>
    <script src="js.js"></script>
</body>
</html>

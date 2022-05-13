<?php

include("conexion.php");
$con=conectar();


$DESC=$_POST['DESCRIPCION'];
$ROLID=$_POST['ROLID'];

$sql="UPDATE roles SET  ROLID='$ROLID',DESCRIPCION='$DESC' WHERE ROLID='$ROLID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
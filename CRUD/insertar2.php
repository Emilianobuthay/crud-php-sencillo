<?php
include("conexion.php");
$con=conectar();


$DESC=$_POST['DESCRIPCION'];
$ROLID=$_POST['ROLID'];


$sql="INSERT INTO roles VALUES('$ROLID','$DESC')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
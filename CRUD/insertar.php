<?php
include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$NOMBRE=$_POST['NOMBRE'];
$EDAD=$_POST['EDAD'];
$SEXO=$_POST['SEXO'];
$ROLID=$_POST['ROLID'];


$sql="INSERT INTO usuarios VALUES('$ID','$NOMBRE','$EDAD','$SEXO','$ROLID')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
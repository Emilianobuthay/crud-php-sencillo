<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$NOMBRE=$_POST['NOMBRE'];
$EDAD=$_POST['EDAD'];
$SEXO=$_POST['SEXO'];
$ROLID=$_POST['ROLID'];

$sql="UPDATE usuarios SET  NOMBRE='$NOMBRE',EDAD='$EDAD',SEXO='$SEXO',ROLID='$ROLID' WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
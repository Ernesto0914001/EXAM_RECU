<?php
 include("conexion.php");
$con=conectar();

$marca=$_GET['id'];

$sql="DELETE FROM vehiculo  WHERE marca='$marca'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>

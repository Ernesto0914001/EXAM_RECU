<?php
 include("conexion.php");
$con=conectar();

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$Numero_de_Serie=$_POST['Numero_de_Serie'];


$sql="UPDATE vehiculo SET  marca='$marca',modelo='$modelo' WHERE marca='$marca'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>
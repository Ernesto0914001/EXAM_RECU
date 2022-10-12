<?php
  include("conexion.php");
$con=conectar();

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$Numero_de_Serie=$_POST['Numero_de_Serie'];


$sql="INSERT INTO vehiculo VALUES('$marca','$modelo','$color','$Numero_de_Serie')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
?>
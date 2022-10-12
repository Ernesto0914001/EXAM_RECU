<?php 
     include("conexion.php");
    $con=conectar();
    $id=$_GET['id'];
    $sql="SELECT * FROM vehiculo WHERE marca='$id'";
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
                    
                    <input type="hidden" name="marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']  ?>">
                                <input type="text" class="form-control mb-3" name="color" placeholder="color" value="<?php echo $row['color']  ?>">
                                <input type="text" class="form-control mb-3" name="Numero_de_Serie" placeholder="Numero_de_Serie" value="<?php echo $row['Numero_de_Serie']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
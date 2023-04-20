<?php

require_once('conexion.php');
require_once('metodoscrud.php');

$conexion= new Conexion();
$conexion->conn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="style1.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row"> 
            
            <div class="col-md-3">
                <h1>Ingrese los datos</h1>
                <p>Agregue al docente en los siguientes campos de texto</p>

                        <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="Identificacion" placeholder="Identificacion">
                        <input type="text" class="form-control mb-3" name="Asignatura" placeholder="Asignatura">
                        <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="Agregar">
                    </form>
            </div>
            <?php
                $obj= new metodos();
                $sql="SELECT Nombre, Identificacion, Asignatura, Telefono from docentes";
                $datos = $obj ->mostrarDatos($sql);

                foreach ($datos as $key) { 
                }        
            ?>
            <div class="col-md-8">
                <h1>Docentes</h1>
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th><?php echo $key['Nombre'];?></th>
                            <th><?php echo $key['Identificacion'];?></th>
                            <th><?php echo $key['Asignatura'];?></th>
                            <th><?php echo $key['Telefono'];?></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        
                   ?>
                </table>
            </div>
        </div>  
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
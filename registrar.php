<?php
$mysqli = include_once "conexion.php";
$departament = $_POST["departament"];
$tipologia = $_POST["tipologia"];
$descripcio = $_POST["descripcio"];

$sentencia = $mysqli->prepare("INSERT INTO INCIDENCIA
(departament, tipologia, descripcio)
VALUES
(?, ?, ?)");

$sentencia->bind_param("iis", $departament, $tipologia, $descripcio);
$sentencia->execute();

$sentencia2 = $mysqli->query("SELECT MAX(id) FROM  INCIDENCIA");
$resultado2 = $sentencia2->fetch_row();
?>





<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Incidencia</title>
        <link rel="stylesheet" href="form.css">
        <?php include_once "includes.php"?>
        <link rel="stylesheet" href="registrar.css">

    </head>

 
    <body> 

 
          


          <div><a href="landing_page.php" class="logo"></a></div>
          <br>
          <div ><?php echo "<h1>Tu id es el ".$resultado2[0]."</h1>";?></div>
          <br>
          <div ><?php echo("<a href='listado.php'>Volver al listado</a>")?></div>
            
            
    </body>

</html>

    
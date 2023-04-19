<?php

$mysqli = include_once "conexion.php";
$a22joslarfer_PROJGI3 = $mysqli->query("SELECT * FROM ACTUACION")->fetch_all(MYSQLI_ASSOC);
// joins
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Actuaciones</title>
    <link rel="stylesheet" href="listado.css">
</head>
<html>
<body>
<a href="landing_page.php" class="back-button"></a>

    <div class="table">
        <div class="title"><h1>ACTUACIONES</h1></div>
        <div class="d-flex justify-content-center h-100">
            <div class="search">
                    <form method="POST" action="select_actuacion.php">
                        <input type="text" class="search-input" placeholder="Posa una ID" name="id">
                        <button type="submit" class="search-icon"></i></button>
                    </form>
                    <?php
                    include ("conexion.php");
                    if(isset($_POST["id"])) {
                        $id = $_POST ["id"];
                        
                    }?>
            </div>
        </div>
        <div class="header">
            <div class="row">
                <div>ID</div>
                <div>Descripcio</div>
                <div>Estat</div>
                <div>Temps Invertit</div>
                <div>Visibilitat</div>
                <div>Data</div>
                <div>Accion</div>
                <div>Accion</div>
            </div>
        </div>
        <div class="body">
            
        <?php foreach ($a22joslarfer_PROJGI3 as $actual) { ?>
               
               <div class="incidencia <?php 
                   if ($actual['prioritat']=='ALTA') echo 'alta'; 
                   if ($actual['prioritat']=='MITJA') echo 'mitja';
                   if ($actual['prioritat']=='BAIXA') echo 'baixa';
               ?>">
                   <div class="row">
                       <div><?php echo $actual["id"] ?></div>
                       <div><?php echo $actual["descripcio"] ?></div>  
                       <div><?php echo $actual["estat"] ?></div>  
                       <div><?php echo $actual["tempsInvertit"] ?></div>  
                       <div><?php echo $actual["visible"] ?></div>  
                       <div><?php echo $actual["data"] ?></div>  
                       <div><a href="actualizar_actuacion.php?id=<?php echo $actual["id"] ?>">Actualitzar</a></div>
                       <div><a href="borrar_actuacion.php?id=<?php echo $actual["id"] ?>">Borrar</a></div>
                   </div>
               </div>
           <?php } ?>
        </div>   
    </div>
</body>
</html>


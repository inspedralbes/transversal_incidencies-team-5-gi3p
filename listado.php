<?php

$mysqli = include_once "conexion.php";


$a22joslarfer_PROJGI3 = $mysqli->query("SELECT * FROM INCIDENCIA")->fetch_all(MYSQLI_ASSOC);
// joins
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Incidencias</title>
    <link rel="stylesheet" href="listado.css">
</head>
<html>
<body>
<a href="landing_page.php" class="back-button"></a>

    <div class="table">
        <div class="title"><h1>INCIDÈNCIES</h1></div>
        <div class="d-flex justify-content-center h-100">
            <div class="search">
                    <form method="POST" action="select.php">
                        <input type="text" class="search-input" placeholder="Posa una ID" name="id">
                        <button type="submit" class="search-icon"></i></button>
                    </form>
                    <?php
                    include ("conexion.php");
                    if(isset($_POST['id'])) {
                        $id = $_POST ['id'];
                        
                    }?>
            </div>
        </div>
        <div class="header">
            <div class="row">
                <div>ID</div>
                <div>Gravetat</div>
                <div>Data</div>
                <div>DataFi</div>
                <div>Departament</div>
                <div>Tècnic</div>
                <div>Descripcio</div>
                <div>Tipologia</div>
                <div>Accion</div>
                <div>Accion</div>
            </div>
        </div>
        <div class="body">
                <?php
        foreach ($a22joslarfer_PROJGI3 as $INCIDENCIA) { ?>
    <div class="incidencia <?php 
        if ($INCIDENCIA['prioritat']=='Alta') echo 'alta'; 
        if ($INCIDENCIA['prioritat']=='Mitja') echo 'mitja';
        if ($INCIDENCIA['prioritat']=='Baixa') echo 'baixa';
    ?>">                <div class="row">

                    <div><?php echo $INCIDENCIA["id"] ?></div>
                    <div><?php echo $INCIDENCIA["prioritat"] ?></div>  
                    <div><?php echo $INCIDENCIA["data"] ?></div>  
                    <div><?php echo $INCIDENCIA["dataFi"] ?></div>  
                    <div><?php echo $INCIDENCIA["departament"] ?></div>  
                    <div><?php echo $INCIDENCIA["tecnic_incidencia"] ?></div>  
                    <div><?php echo $INCIDENCIA["descripcio"] ?></div>  
                    <div><?php echo $INCIDENCIA["tipologia"] ?></div>  
                    <div><a href="actualizarIncidencia.php?id=<?php echo $INCIDENCIA["id"] ?>">Actualitzar</a></div>
                    <div><a href="borrar.php?id=<?php echo $INCIDENCIA["id"] ?>">Borrar</a></div>
                </div>
            <?php } ?>
        </div>   
    </div>
</body>
</html>


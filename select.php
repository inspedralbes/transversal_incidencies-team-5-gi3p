<?php


$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$sentencia = $mysqli->prepare("SELECT INCIDENCIA.id,INCIDENCIA.descripcio,INCIDENCIA.prioritat,INCIDENCIA.data,INCIDENCIA.dataFi,INCIDENCIA.departament,TECNIC.nom as nom ,TIPOLOGIA.nomT as nomT FROM INCIDENCIA LEFT JOIN TECNIC ON INCIDENCIA.tecnic_incidencia = TECNIC.id LEFT JOIN TIPOLOGIA ON INCIDENCIA.tipologia = TIPOLOGIA.id WHERE INCIDENCIA.id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$actual = $resultado->fetch_assoc();

if (!$resultado) {
    echo "Error: " . $mysqli->error;
    exit;
}

?>

<link rel="stylesheet" href="listado.css">
<a href="index.php" class="back-button"></a>
<br>
  <div class="table">
          <div class="title"><h1>INCIDÈNCIES</h1></div>
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
        
                      <div class="row">
                              <div><?php echo $actual["id"] ?></div>
                              <div><?php echo $actual["prioritat"] ?></div>  
                              <div><?php echo $actual["data"] ?></div>  
                              <div><?php echo $actual["dataFi"] ?></div>  
                              <div><?php echo $actual["departament"] ?></div>  
                              <div><?php echo $actual["nom"] ?></div>  
                              <div><?php echo $actual["descripcio"] ?></div>  
                              <div><?php echo $actual["nomT"] ?></div>  
                              <div><a href="actualizarIncidencia.php?id=<?php echo $actual["id"] ?>">Actualitzar</a></div>
                              <div><a href="borrar.php?id=<?php echo $actual["id"] ?>">Borrar</a></div>
                      </div>
            
      </div>   

          
  </div>
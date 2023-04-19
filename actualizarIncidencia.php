<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";

$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, prioritat, tecnic_incidencia, departament FROM INCIDENCIA WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();

# Obtenemos solo una fila, que será la incidencia a editar
$INCIDENCIA = $resultado->fetch_assoc();
if (!$INCIDENCIA) {
    exit("No hay resultados para ese ID");
}

?>

      <h1>Actualizar Incidencia</h1>
          
      <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $INCIDENCIA["id"] ?>">
                            
                  <div class="form-group">
                    <label for="prioritat">Prioritat </label>
                    <select class="form-control" id="prioritat" name="prioritat">
                      <option value="3">Baixa</option>
                      <option value="2">Mitjana</option>
                      <option value="1">Alta</option>
                    </select>

                  </div>
                  <div class="form-group">
                    <label for="tecnic_incidencia">Tècnic</label>
                    <select class="form-control" id="tecnic_incidencia" name="tecnic_incidencia">
                      <option value="1">Alvaro</option>
                      <option value="2">Maria</option>
                      <option value="3">Ermengol</option>
                      <option value="4">Lopez</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="departament">Departament</label>
                    <select class="form-control" id="departament" name="departament">
                      <option value="1">Castellà</option>
                      <option value="2">Anglès</option>
                      <option value="3">Matemàtiques</option>
                      <option value="4">Alemany</option>
                    
                    </select>
                  </div>
                
                <div class="form-group">
                    <button class="btn btn-success">Guardar</button>
                  
                </div>
    </form>
 
 </body>
</html>

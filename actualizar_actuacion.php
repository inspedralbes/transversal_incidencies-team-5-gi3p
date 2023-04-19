<?php
$host = "localhost";
$usuario = "a22joslarfer_bd";
$contrasenia = "123456aA";
$base_de_datos = "a22joslarfer_PROJGI3";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$estat = $_POST["estat"];
$tempsInvertit = $_POST["tempsInvertit"];
$visible = $_POST["visible"];
$data = $_POST["data"];
$descripcio = $_POST["descripcio"];
$id = $_POST["id"];

$sentencia = $mysqli->prepare("UPDATE ACTUACION SET
estas = ?, tempsInvertit = ?, visible = ?, data = ?, descripcio = ? WHERE id = ?");
$sentencia->bind_param("isissi", $estat, $tempsInvertit, $visible, $data, $descripcio, $id);

$sentencia->execute();
header("Location: listado_actuaciones.php");

?>
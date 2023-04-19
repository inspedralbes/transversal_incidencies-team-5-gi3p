<?php
$host = "localhost";
$usuario = "a22joslarfer_bd";
$contrasenia = "123456aA";
$base_de_datos = "a22joslarfer_PROJGI3";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$departament = $_POST["departament"];
$prioritat = $_POST["prioritat"];
$tecnic_incidencia = $_POST["tecnic_incidencia"];
$id = $_POST["id"];

$sentencia = $mysqli->prepare("UPDATE INCIDENCIA SET
departament = ?, prioritat = ?, tecnic_incidencia = ? WHERE id = ?");
$sentencia->bind_param("iiii", $departament, $prioritat, $tecnic_incidencia, $id);

$sentencia->execute();
header("Location: listado.php");

?>
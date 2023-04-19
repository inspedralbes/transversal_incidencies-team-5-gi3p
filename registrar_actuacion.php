<?php
$mysqli = include_once "conexion.php";
$estat = $_POST["estat"];
$visible = $_POST["visible"];
$descripcio = $_POST["descripcio"];
$tecnic_actuacio= $_POST["tecnic_actuacio"];
$tempsInvertit = $_POST["tempsInvertit"];
$data = $_POST["data"];


$sentencia = $mysqli->prepare("INSERT INTO ACTUACION
(estat, visible, descripcio, tecnic_actuacio, tempsInvertit, data)
VALUES
(?, ?, ?, ?, ?, ?)");

$sentencia->bind_param("iisiii", $estat, $visible, $descripcio, $tecnic_actuacio, $tempsInvertit, $data);
$sentencia->execute();

header("LOCATION: listado_actuaciones.php");
?>

    
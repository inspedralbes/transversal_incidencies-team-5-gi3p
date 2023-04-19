<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$quantitat = $_POST["quantitat"];
$producte = $_POST["producte"];

$sentencia = $mysqli->prepare("INSERT INTO LLISTA(id, quantitat, producte)
VALUES
(?, ?, ?)");

$sentencia->bind_param("isi", $id, $quantitat, $producte);
$sentencia->execute();

$resultado2 = $sentencia2->fetch_row();
header("LOCATION: index.php");
?>



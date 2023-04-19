<?php
$host = "localhost";
$usuario = "a22joslarfer_bd";
$contrasenia = "123456aA";
$base_de_datos = "a22joslarfer_PROJGI3";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
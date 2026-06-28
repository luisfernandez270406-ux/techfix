<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$servicio = $_POST['servicio'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO solicitudes
(nombre, correo, telefono, servicio, descripcion)
VALUES
('$nombre', '$correo', '$telefono', '$servicio', '$descripcion')";

mysqli_query($conexion, $sql);

header("Location: index.html");

?>
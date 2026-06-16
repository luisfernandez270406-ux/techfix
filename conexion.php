<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "techfix";

$conexion = mysqli_connect(
    $servidor,
    $usuario,
    $contrasena,
    $base_datos
);

if(!$conexion){
    die("Error de conexión");
}

?>
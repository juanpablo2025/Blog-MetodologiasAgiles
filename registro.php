<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$documento = $_POST['documento'];

$registro = $conectar->query("INSERT INTO usuarios VALUES('$documento', '$nombre', '$correo', '$password')");

?>
<?php
include 'conexion.php';
$password = $_POST['password'];
$correo = $_POST['correo'];

$consulta = $conectar->query("SELECT * FROM usuarios WHERE Correo = '$correo'");

$datos = $consulta->fetch(PDO::FETCH_ASSOC);

if ($password == $datos['Password']) {
	header('location: blog.html');
} else {
	echo "Contraseña incorrecta";
}
?>
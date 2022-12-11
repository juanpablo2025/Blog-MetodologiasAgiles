<?php
incluide 'conexion.php';
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$password=$_POST['password'];
	$documento = $_POST['documento'];


	$registro = $conectar->Query("INSERT INTO usuarios VALUES
	('$documento','$nombre','$correo','$password')");

?>
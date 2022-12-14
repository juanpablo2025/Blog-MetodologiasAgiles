<?php
$usuario = 'root';
$password = '';
$db = 'proyecto';
$server = 'localhost';
// COMENTARIO conectar a base de datos
$conectar = new PDO("mysql:host=$server;dbname=$db", $usuario, $password);


?>
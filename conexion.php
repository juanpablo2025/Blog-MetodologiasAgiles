<?php

	$usuario = 'root';
	$password = '';
	@db = 'proyecto';
	$server ='localhost';

	//comentaro conectar 


$conectar = new PDO("mysql:host=$server;dbname=$db",$usuario,$password);
?>
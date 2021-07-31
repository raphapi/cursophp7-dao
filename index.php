<?php 

	require_once("config.php");
	/* SELECT:
	$sql = new Sql();

	$usuarios = $sql->select("SELECT *  FROM  tb_usuario");

	echo json_encode($usuarios);*/
	
	$user = new Usuario();

	$user->loadbyId(5);

	echo $user;

 ?>
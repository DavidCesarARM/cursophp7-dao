<?php
	require_once("config.php");

	/*$root = new Usuario();
	$root->loadByid(2);
	echo $root;*/

	/*$lista = Usuario::getList();
	echo json_encode($lista);*/

	/*$busca = Usuario::search("ser");
	echo json_encode($busca);*/

	/*$usuario = new Usuario();
	$usuario->login("root","123");
	echo $usuario;*/

	/*$aluno = new Usuario();
	$aluno->setDeslogin("aluno");
	$aluno->setDessenha("wetyu");
	$aluno->insert();
	echo $aluno;*/

	/*$usuario = new Usuario();
	$usuario->loadByid(5);
	$usuario->update("professor", "%$#@$");
	echo $usuario;*/

	$usuario = new Usuario();
	$usuario->loadByid(2);
	$usuario->delete();
	echo $usuario;
?>
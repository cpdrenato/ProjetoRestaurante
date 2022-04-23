<?php

require "./model/user_model.php";
require "./service/user_service.php";
require "./config/conexao.php";

// require "./model.php";
// require "../service.php";
// require "../conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {

	echo $_POST['email'];

	$user = new User();

	$user->__set('email', $_POST['email']);
	$user->__set('password', $_POST['password']);

	$conexao = new Conexao();

	$UserService = new UserService($conexao, $user);
	$UserService->inserir();

	header('Location: users.php');

} else if ($acao == 'recuperar') {

	$user = new User();
	$conexao = new Conexao();

	$UserService = new UserService($conexao, $user);
	$users = $UserService->recuperar();

} else if ($acao == 'remover') {

	$user = new User();
	$user->__set('id', $_GET['id']);

	$conexao = new Conexao();

	$userService = new UserService($conexao, $user);
	$userService->remover();

	if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
		header('location: users.php');
	} else {
		header('location: users.php');
	}
}

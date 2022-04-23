<?php

require "./model/user_model.php";
require "./service/user_service.php";
require "./config/conexao.php";

// require "./model.php";
// require "../service.php";
// require "../conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {

	// $contato = new Contato();

	// $contato->__set('name', $_POST['name']);
	// $contato->__set('email', $_POST['email']);
	// $contato->__set('assunto', $_POST['assunto']);
	// $contato->__set('mensagem', $_POST['mensagem']);


	// $conexao = new Conexao();

	// $ContatoService = new ContatoService($conexao, $contato);
	// $ContatoService->inserir();

	// header('Location: index.php');

} else if ($acao == 'recuperar') {

	$user = new User();
	$conexao = new Conexao();

	$UserService = new UserService($conexao, $user);
	$users = $UserService->recuperar();
} /* else if ($acao == 'remover') {

	$contato = new Contato();
	$contato->__set('id', $_GET['id']);

	$conexao = new Conexao();

	$tarefaService = new ContatoService($conexao, $contato);
	$tarefaService->remover();

	if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
		header('location: adm.php');
	} else {
		header('location: adm.php');
	} */
// }

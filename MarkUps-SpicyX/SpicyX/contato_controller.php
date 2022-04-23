<?php

require "./controller/contato_model.php";
require "./service/contato_service.php";
require "./config/conexao.php";

// require "./model.php";
// require "../service.php";
// require "../conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
	$contato = new Contato();
	// echo '<p>'.$_POST['name'].'</p>';
	// echo '<p>'.$_POST['email'].'</p>';
	// echo '<p>'.$_POST['assunto'].'</p>';
	// echo '<p>'.$_POST['mensagem'].'</p>';

	$contato->__set('name', $_POST['name']);
	$contato->__set('email', $_POST['email']);
	$contato->__set('assunto', $_POST['assunto']);
	$contato->__set('mensagem', $_POST['mensagem']);

	// echo '<p>'.$contato->__get('mensagem').'</p>';

	$conexao = new Conexao();

	$ContatoService = new ContatoService($conexao, $contato);
	$ContatoService->inserir();

	header('Location: index.php');
} else if ($acao == 'recuperar') {

	$contato = new Contato();
	$conexao = new Conexao();

	$ContatoService = new ContatoService($conexao, $contato);
	$contatos = $ContatoService->recuperar();
	
} else if ($acao == 'remover') {

	$contato = new Contato();
	$contato->__set('id', $_GET['id']);

	$conexao = new Conexao();

	$tarefaService = new ContatoService($conexao, $contato);
	$tarefaService->remover();

	if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
		header('location: adm.php');
	} else {
		header('location: adm.php');
	}
}

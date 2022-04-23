<?php

session_start();
$acao = 'recuperar';
require './controller/user_controller.php';

//variavel que verifica se a autenticacao foi realizada
$usuario_autenticado = false;
$usuario_id = null;


foreach ($users as $user) {
	echo $user->email;
	echo $user->password;
	echo $user->id;
	if ($user->email == $_POST['email'] && $user->password == $_POST['senha']) {
		$usuario_autenticado = true;
		$usuario_id = $user->id;
	}
}

if ($usuario_autenticado) {
	echo 'Usuário autencicado';
	$_SESSION['autenticado'] = 'SIM';
	$_SESSION['id'] = $usuario_id;
	header('Location: adm.php');
} else {
	$_SESSION['autenticado'] = 'NAO';
	header('Location: sigin.php?login=erro');
}



	/*
	print_r($_GET);

	echo '<br />';

	echo $_GET['email'];
	echo '<br />';
	echo $_GET['senha'];
	*/

	/*
	print_r($_POST);

	echo '<br />';

	echo $_POST['email'];
	echo '<br />';
	echo $_POST['senha'];
	*/

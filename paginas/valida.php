<?php
session_start();

require_once("config/conexao_bd.php");

//Verifica se os campos de login e senha estao vasios se estiver redireciona a login.php

if (empty($_POST['login']) || (empty($_POST['senha'])) {
	header('Location: login.php')
	exit;
}

//Realiza post de login e senha com filtro contra sqlinjection
$login = mysqli_real_escape_string($_POST['login']);
$senha = mysqli_real_escape_string($_POST['senha']);



$query = "SELECT id_user, login FROM dados_user WHERE login = $login AND senha = md5($senha)";

$result = mysqli_query($link, $query);
$row = mysql_num_rows($result);

/*Se row = 1 então usuario está logado e se está logado precisamos atribuir a seção o login do usuario para validar a seção internamente na pagina de painel. Se o usuario nao estiver autenticado sera redirecionado a pagina de login */

if ($row == 1) {							
	$_SESSION['login'] = $login;			
	header('location: painel.php')
	exit;
} else{
	header('location: login.php')
	exit;
}
?>


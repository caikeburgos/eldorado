usuario<?php
session_start();

require_once("config/conexao_bd.php");

//Verifica se os campos de login e senha estao vasios se estiver redireciona a login.php

if (empty($_POST['usuario']) || (empty($_POST['senha'])) {
	header('Location: login.php')
}

//Realiza post de login e senha com filtro contra sqlinjection
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



$query = "SELECT count(*) AS contar FROM dados_user WHERE usuario = $usuario AND senha = $senha";

$consulta = mysqli_query($link, $query);
$array = mysql_fetch_array($consulta);

/*Se row = 1 então usuario está logado e se está logado precisamos atribuir a seção o login do usuario para validar a seção internamente na pagina de painel. Se o usuario nao estiver autenticado sera redirecionado a pagina de login */

if ($array['contar']>0) {
	$_SESSION['username'] = $usuario;			
	header('location: painel.php')
} else {
	echo '<div class="alert alert-danger" role="alert">Login invalido</div>';;
}

?>


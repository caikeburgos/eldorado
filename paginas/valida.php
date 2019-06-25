<?php
session_start();
require_once("config/conexao_bd.php");


$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);



$query = "SELECT nome, email, usuario FROM dados_user WHERE usuario = '$usuario' AND senha = '$senha'";

$consulta = mysqli_query($link, $query) or die(mysqli_error($link));
$array = mysqli_fetch_array($consulta);

/*Se row = 1 então usuario está logado e se está logado precisamos atribuir a seção o login do usuario para validar a seção internamente na pagina de painel. Se o usuario nao estiver autenticado sera redirecionado a pagina de login */

if (mysqli_num_rows($consulta) > 0) {
	$_SESSION['username'] = $array['usuario'];
	$_SESSION['nome'] = $array['nome'];
	$_SESSION['email'] = $array['email'];

	header('location: painel.php');
} else {
	echo '<div class="alert alert-danger" role="alert">Login invalido</div>';
}
?>

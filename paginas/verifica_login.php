<?php
	//Este script verifica se o usuario está logado para poder acessar pagina
	//1- Inicia sessao
	//2 - Se nao houver sessao de usuario redireciona para login
	session_start();
	if (!$_SESSION['login']) {
		header('location: login.php')
		exit;
	}
?>
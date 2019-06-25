<?php
	session_start();					//inicia sessao
	session_destroy();					//encerra todas sessoes
	header('location: ../index.php');		//redireciona para a pagina inicial	
?>

<?php
	session_start();					//inicia sessao
	session_destroy();					//encerra todas sessoes
	header('location: login.php')		//redireciona para a pagina inicial		
?>
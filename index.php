<?php

require_once("config/conexao_bd.php");

if(isset($_GET["pg"])){
	$pagina = $_GET["pg"];
}
else{
	$pagina = "inicio";
}	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OAT</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js" ></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>
		<div class="container" id="menu">

		<div class="jumbotron"><!-- 

		<h1>Olá!</h1>

		<p>El Dorado Comunicação</p> -->

		<ul class="menu">
			<li><a class="btn btn <?= ($pagina == 'inicio')?'btn-primary':'btn-outline-primary' ?>" role="button" href="?pg=inicio">Início</a></li>

			<li><a class="btn btn <?= ($pagina == 'sobre')?'btn-primary':'btn-outline-primary' ?>" role="button" href="?pg=sobre">Sobre</a></li>

			<li><a class="btn <?= ($pagina == 'cadastro')?'btn-primary':'btn-outline-primary' ?>" role="button" href="?pg=cadastro">Receber Novidades</a></li>

			<li><a class="btn <?= ($pagina == 'listagem')?'btn-primary':'btn-outline-primary' ?>" role="button" href="?pg=listagem">Listagem</a></li>

		</ul>
	</div>
	</div>

	<div class="container" id="corpo">
		<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item" aria-current="page"><a href="?pg=inicio">Início</a></li>
			  </ol>
			</nav>

			<?php
			
				include("paginas/".$pagina.".php");

			?>
	</div>

	<div class="container" id="rodape">

	
		<div class="col-md" >
			<h6>Todos os direitos reservados.</h6>
		
		</div>
	</div>


	</body>
</html>
<?php
	session_start();
	include('verifica_login.php');
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
		<!-- Customização de fontes -->
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	   


	</head>
	<body>
		 <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
		        <a class="navbar-brand" href="#">Eldorado</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarCollapse">
		          <ul class="navbar-nav mr-auto">
		          	<li class="nav-item">
		          		<!-- Apresenta o login do usuario -->
		              <a class="nav-link" href="?pg=login"><?php echo "$_SESSION['login']"; ?></a>
		            </li>
		            <li class="nav-item active">
		              <a class="nav-link" href="?pg=inicio">Início<span class="sr-only">(atual)</span></a>
		            </li>		  
		            <li class="nav-item">
		              <a class="nav-link" href="?pg=listagem">Listagem</a>
		            </li>  
		            <li class="nav-item">
		              <a class="nav-link" href="?pg=logout">SAIR</a>
		            </li>		            
		          </ul>
		        </div>
      		</nav>	
		<!-- Header -->
	  	<header class="masthead">
	    	<div class="container">
	        	<div class="intro-text">	        		
	      		</div>
	    	</div>
	    </header>

		<main role="main">
			<?php
				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "inicio";
				}				
				include("paginas/".$pagina.".php");
			?>
		</main>

		<!-- Footer -->
		<footer class="footer">
		    <div class="container">
		    	<div class="row align-items-center">
		    		<div class="col-md-4">
		        		<span class="copyright">Copyright &copy; Your Website 2019</span>
		        	</div>
		        	<div class="col-md-4">
		        		<ul class="list-inline social-buttons">
			            	<li class="list-inline-item">
			              		<a href="#">
			                		<i class="fab fa-twitter"></i>
			              		</a>
			            	</li>
			            	<li class="list-inline-item">
			              		<a href="#">
			                		<i class="fab fa-facebook-f"></i>
			              		</a>
			            	</li>
			            	<li class="list-inline-item">
			              		<a href="#">
			              		  <i class="fab fa-linkedin-in"></i>
			             		</a>
			            	</li>
		            	</ul>
		        	</div>
		       	 	<div class="col-md-4">
		          		<ul class="list-inline quicklinks">
		           			<li class="list-inline-item">
		              			<a href="#">Privacy Policy</a>
		            		</li>
		            		<li class="list-inline-item">
		              			<a href="#">Terms of Use</a>
		            		</li>
		          		</ul>
		        	</div>
		       </div>
		    </div>
		</footer>
	</body>
</html>
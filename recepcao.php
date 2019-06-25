<?php
	session_start();

	if(empty($_SESSION['username'])){
		header('location: index.php?erro=0');
	}

	$usuario = $_SESSION['username'];

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
		              <a class="nav-link"><?php echo $_SESSION['username']; ?></a>
		            </li>
		            <li class="nav-item active">
		              <a class="nav-link" href="paginas/recepcao.php">Recepção<span class="sr-only">(atual)</span></a>
		            </li>		  
		            <li class="nav-item">
		              <a class="nav-link" href="?pg=listagem">Listagem</a>
		            </li>  
		            <li class="nav-item">
		              <a class="nav-link" href="paginas/logout.php">SAIR</a>
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

<div class="container">
<div class="row">

<!-- <main role="main"> -->

   <div class="col-lg-12 text-center">
   	<br><br>
    <h2 class="section-heading text-uppercase">Oi, <?php echo $_SESSION['nome']; ?>!</h2><br><br>
    <h3 class="section-subheading text-muted">Aqui você pode verificar as últimas notícias da área de design e</h3>
    <h3 class="section-subheading text-muted">do mundo da tecnologia.</h3><br><br><br><br>
   </div>

<div class="row">
	
    <div class="col-md">
		<div class="card" style="width: 18rem; ">
			<img class="card-img-top" src="https://olhardigital.com.br/uploads/acervo_imagens/2019/03/r16x9/20190319010541_1200_675.jpg" alt="Card image cap">
				<div class="card-body">
		    	<h5 class="card-title">IA transforma desenhos em paisagens.</h5>
		    	<p class="card-text">Nvidia cria Inteligência Artificial que transforma desenhos simples em paisagens realistas.</p><br>
		    	<a href="https://www.designerd.com.br/nvidia-inteligencia-artificial-transforma-desenhos-simples-em-paisagens-realistas/" target="_blank" class="btn btn-primary">Acessar</a>
				</div>
		</div>
    </div>

    <div class="col-md">
		<div class="card" style="width: 18rem; ">
			<img class="card-img-top" src="https://i2.wp.com/www.showmetech.com.br/wp-content/uploads//2018/05/SPOTIFY.jpg?resize=990%2C556&ssl=1" alt="Card image cap">
				<div class="card-body">
		    	<h5 class="card-title">Filtro do Spotify no Instagram.</h5>
		    	<p class="card-text">Como usar filtro do Spotify no Instagram.</p><br>
		    	<a href="https://olhardigital.com.br/dicas_e_tutoriais/noticia/como-usar-o-filtro-do-spotify-que-lista-as-musicas-salvas-no-celular/87163" target="_blank" class="btn btn-primary">Acessar</a>
				</div>
		</div>
    </div>

    <div class="col-md">
		<div class="card" style="width: 18rem; ">
			<img class="card-img-top" src="https://dt6wuqe2x3po3.cloudfront.net/images/hero/ps-promo-icon2-980x529.jpg?1555959082" alt="Card image cap">
				<div class="card-body">
		    	<h5 class="card-title">7 Fatos do Photoshop.</h5>
		    	<p class="card-text">7 fatos curiosos do Photoshop.</p><br><br><br>
		    	<a href="https://www.tecmundo.com.br/software/141334-7-fatos-curiosos-photoshop-voce-nao-sabia.htm" target="_blank" class="btn btn-primary">Acessar</a>
				</div>
		</div>
    </div>

    <div class="col-md">
      <div class="card" style="width: 18rem;">
			<img class="card-img-top" src="https://o.aolcdn.com/images/dims?quality=85&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims%3Fcrop%3D1600%252C1067%252C0%252C0%26quality%3D85%26format%3Djpg%26resize%3D1600%252C1067%26image_uri%3Dhttps%253A%252F%252Fs.yimg.com%252Fos%252Fcreatr-uploaded-images%252F2019-06%252Ff4713090-9503-11e9-af6b-ae00898ce6c8%26client%3Da1acac3e1b3290917d92%26signature%3Db6361e64e8ab82fcc8fd1bceb663e01a3ec8a191&client=amp-blogside-v2&signature=670af8f0fae674353702d9974b24fa6a681cd4a1" alt="Card image cap">
				<div class="card-body">
		    	<h5 class="card-title">Windows Terminal</h5>
		    	<p class="card-text">Prévia do Windows Terminal já pode ser baixada.</p>
		    	<a href="https://www.tecmundo.com.br/software/142972-previa-windows-terminal-baixada-microsoft-store.htm" target="_blank" class="btn btn-primary">Acessar</a>
				</div>
    	</div>
	</div>
</div>
<!-- </main> -->
</div>
</div>

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


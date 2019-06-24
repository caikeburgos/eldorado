   <!-- Services -->
   <section class="page-section" id="services">
		<div class="container">
      		<div class="row">
        		<div class="col-lg-12 text-center">
         			<h2 class="section-heading text-uppercase">Serviçoss</h2>
          			<h3 class="section-subheading text-muted">Aqui você encontra</h3>
        		</div>
      		</div>
      		<div class="row text-center">
        		<div class="col-md-4">
          			<span class="fa-stack fa-4x">
            			<i class="fas fa-circle fa-stack-2x text-primary"></i>
            			<i class="fas fa-paint-brush fa-stack-1x fa-inverse"></i>
          			</span>
          			<h4 class="service-heading">Design</h4>
          			<p class="text-muted">Oferecemos a você cliente edição de fotos e videos, além da criação de banners, logs, cartão de visita, desenvolvimento de artes criativas, dentre outros.</p>
        		</div>
        		<div class="col-md-4">
          			<span class="fa-stack fa-4x">
            			<i class="fas fa-circle fa-stack-2x text-primary"></i>
            			<i class="fas fas fa-code fa-stack-1x fa-inverse"></i>
          			</span>
          			<h4 class="service-heading">Desenvolvimento Web</h4>
          			<p class="text-muted">Nossa empresa lhe oferece o desenvolvimento de aplicações web e websites sob medida com redimencionamento responsivo de forma eficás e com baixo custo</p>
        		</div>
        		<div class="col-md-4">
          			<span class="fa-stack fa-4x">
            			<i class="fas fa-circle fa-stack-2x text-primary"></i>
            			<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          			</span>
      				<h4 class="service-heading">Web Security</h4>
      				<p class="text-muted">Nossa instituição disponibiliza de consultorias empresariais de segurança da informação, mapeando vulnerabilidades, desenvolvendo politicas de segurança e MUITO MAIS.</p>
        		</div>
      		</div>
    	</div>
  	</section>

  	<!-- Sobre -->
  	<section class="page-section" id="about">
    	<div class="parallax">
    		<div id="secundary-text">
    			<div class="col-md-6 px-0">
	            	<h1 class="display-4 font-italic">Sobre nós</h1>
	              	<p class="lead my-3">Idealizada por Caike Burgos a instituição Eldorado é formada por uma equipe de 3 membros(Caike Burgos, Hérick Raposo, Kauê Siqueira e Rafael Reis), tendo enfoque no desenvolvimento web e design gráfico, entretanto oferece como parte de seus serviços consultoria empresarial em segurança da informação.</p>
	        	</div>
    		</div>
      	</div>	    
	</section>

	<!-- PHP para inserção no banco de dados -->
    <?php
		$actionEditar = "";
		$id = 0;
		$nome = NULL;
		$email = NULL;
		$usuario = NULL;
		$senha = NULL;

		if (isset($_GET["editar"])) {
			$id = $_GET["editar"];
			$sql = "SELECT * FROM dados_user WHERE id = $id";
			$query = mysqli_query($link, $sql);
			if($row = mysqli_fetch_assoc($query)){
				$nome = $row["nome"];
				$email = $row["email"];
				$usuario = $row["usuario"];
				$senha = $row["senha"];
			}
			else{
				echo "Falha ao carregar registro!";
			}
			$actionEditar = "&editar=$id";
		}
	?>

	<!-- Cadastro -->
	<div class="row">
		<div class="col-md-3">
		</div>

		<div class="col-md-6">

			<form action="?pg=processar<?= $actionEditar ?>" method="POST">
			<div class="form-group">
			    <label for="inputNome">Nome</label>
			    <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" value="<?= $nome ?>">		    
			</div>
			<div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">		    
			</div>
			<div class="form-group">
			    <label for="inputUsuario">Usuario</label>
			    <input type="text" class="form-control" id="inputUsuario" name="usuario" aria-describedby="usuario" placeholder="Digite seu nome de usuario" value="<?= $usuario ?>">		    
			<
			<div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
			</div>			
			<button type="submit" class="btn btn-primary">Enviar</button>
			</form>

		</div>

		<div class="col-md-3">
		</div>
	</div>


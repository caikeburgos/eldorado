<?php
	$actionEditar = "";
	$id = 0;
	$nome = NULL;
	$email = NULL;
	$login = NULL;
	$senha = NULL;

	if (isset($_GET["editar"])) {
		$id = $_GET["editar"];
		$sql = "SELECT * FROM dados_user WHERE id = $id";
		$query = mysqli_query($link, $sql);
		if($row = mysqli_fetch_assoc($query)){
			$nome = $row["nome"];
			$email = $row["email"];
			$login = $row["login"];
			$senha = $row["sennha"];
		}
		else{
			echo "Falha ao carregar registro!";
		}
		$actionEditar = "&editar=$id";
	}
?>

<!-- Login -->
	<div class="row">
		<div class="col-md-3">
		</div>

		<div class="col-md-6">
			<h1>Login</h1>
			<form action="?pg=valida" method="POST">
				<div class="form-group">
				    <label for="inputLogin">Login</label>
				    <input type="text" class="form-control" id="inputLogin" name="login" aria-describedby="nickname" placeholder="Digite seu nome de usuario" value="<?= $login ?>">		    
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Senha</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
				</div>
				  	<button type="submit" class="btn btn-primary">Entrar</button>
			</form>
		</div>

		<div class="col-md-3">
		</div>
	</div>

usuario<?php
	$actionEditar = "";
	$id = 0;
	$nome = NULL;
	$email = NULL;
	$usuario = NULL;
	$senha = NULL;

?>

<!-- Login -->
	<div class="row">
		<div class="col-md-3">
		</div>

		<div class="col-md-6">
			<h1>Login</h1>
			<form action="?pg=valusuariomethod="POST">
				<div class="form-group">
				    <label for="inputUsuario">Usuario</label>
				    <input type="text" class="form-control" id="inputUsuario" name="usuario" aria-describedby="usuario" placeholder="Digite seu nome de usuario" value="<?=$usuario?>">		    
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
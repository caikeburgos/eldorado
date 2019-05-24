<?php

$email = $_POST["email"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];

$sql = "INSERT INTO dados_user (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

$query = mysqli_query($link, $sql);

if ($query === TRUE) {

	echo '<div class="alert alert-success" role="alert">Cadastro Realizado!</div>';	

}else{
	echo '<div class="alert alert-danger" role="alert">Opa! Você esqueceu de alguma coisa. Formulário incompleto.</div>';
}
?>
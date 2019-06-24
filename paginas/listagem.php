
<?php

if (isset($_GET["excluir"])) {
	$id_user = $_GET["excluir"];
	$sql = "DELETE FROM dados_user WHERE id_user = $id_user";
	$query = mysqli_query($link, $sql);
	if ($query === TRUE) {
		echo "Registro $id_user excluído com sucesso!";
	}
}

$sql = "SELECT * FROM dados_user";

$query = mysqli_query($link, $sql);


// echo "<table>";

// while($row = mysqli_fetch_assoc($query)) 
// {
// 	$email = $row["email"];
// 	echo "<tr>";

// 	echo "<td>";
// 	echo $row["nome"];
// 	echo "</td>";

// 	echo "<td>$email</td>";

// 	echo "</tr>";
// }

// echo "</table>";

echo "<table>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr>
		<td>
			<?= $row["id_user"] ?>
		</td>
		<td>
			<?= $row["email"] ?>
		</td>
		<td>			
			<?= $row["nome"] ?>
		</td>
		<td>			
			<?= $row["telefone"] ?>
		</td>
		<td>
			<a 
			href="?pg=cadastro&editar=<?= $row["id_user"] ?>"
			>
				Editar
			</a>
		</td>
		<td>
			<a 
			href="?pg=listagem&excluir=<?= $row["id_user"] ?>"
			>
				Excluir
			</a>
		</td>
	</tr>

<?php 

}

echo "</table>";

?>

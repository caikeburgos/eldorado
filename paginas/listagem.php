<?php

$sql = "SELECT * FROM dados_user";

$query = mysqli_query($link, $sql);

echo "<table>";

while ($row = mysqli_fetch_assoc($query)) {

?>
	<tr>
		<td><?= $row["nome"] ?></td>
		<td><?= $row["email"] ?></td>
		<td><?= $row["telefone"] ?></td>
	</tr>

<?php

}

echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta chofer</title>
	<link rel="stylesheet" type="text/css" href="consCSS.css">
</head>
<body>
	<?php include("..\menuNav.php"); ?>
	<?php
	$CBD = mysqli_connect("localhost", "root", "", "gasBD");
	if (!$CBD) {
		echo "Error de conexión";
		exit();
	}
	$query = "SELECT * FROM pipas;";
	$query = "SELECT * FROM pipas;";
	$r = mysqli_query($CBD , $query);
	?>
	<div class="cont">
		<table>
			<thead>
				<tr>
					<td>Matricula</td>
					<td>Chofer</td>
					<td>Capacidad</td>
					<td>Tipo de carga</td>
					<td>Ruta</td>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($r)) {
					echo "<tr>";
					echo "<td>";
					echo $row["matricula"];
					echo "</td>";
					echo "<td>";
					echo $row["ID_Chofer"];
					echo "</td>";
					echo "<td>";
					echo $row["capacidad"];
					echo "</td>";
					echo "<td>";
					echo $row["ID_Ruta"];
					echo "</td>";
					echo "<tr/>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
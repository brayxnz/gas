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
	$query = "SELECT * FROM choferes;";
	$r = mysqli_query($CBD , $query);
	?>
	<div class="cont">
		<table>
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Licencia</td>
					<td>Fecha de nac.</td>
					<td>Teléfono</td>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($r)) {
					echo "<tr>";
					echo "<td>";
					echo $row["nombre"];
					echo "</td>";
					echo "<td>";
					echo $row["licencia"];
					echo "</td>";
					echo "<td>";
					echo $row["fecha_nac"];
					echo "</td>";
					echo "<td>";
					echo $row["telefono"];
					echo "</td>";
					echo "<tr/>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
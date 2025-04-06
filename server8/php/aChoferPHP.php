<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Alta chofer</title>
	<link rel="stylesheet" type="text/css" href="gasCSS.css"/>
</head>
<body>
	<?php
        include("..\menuhamb.html");
    ?>
<p>
	<?php
	$conexion = mysqli_connect("localhost","root","","gasBD");
	if(!$conexion){
		echo "Error" . mysql_connect_error();
		exit();
	}else{
		echo"conexion exitosa";
	}
	?>
	<h1>Alta de chofer</h1>
	<div class="contPHP">
		<p>
			<h2>Nombre:</h2>
			<?php
			echo $_GET["nChofer"];
			?>
			<h2>Licencia</h2>
			<?php
			echo $_GET["licenciaChofer"];
			?>
			<h2>Fecha nacimiento</h2>
			<?php 
			echo $_GET["cumpleChofer"];
			?>
			<h2>Teléfono</h2>
			<?php 
			echo $_GET["telChofer"];
			?>
		</p>
		<p>
	</div>
		<h2>Esta fue la query: </h2>
		<?php
			$query = "INSERT INTO choferes (nombre, licencia, fecha_nac, telefono) VALUES ('" . $_GET['nChofer'] . "', '" . $_GET['licenciaChofer'] . "', '" . $_GET['cumpleChofer'] . "', '" . $_GET['telChofer'] . "');";
			echo $query;
			if (mysqli_query($conexion, $query)) {
				echo "<br/>query ejecutada <br/> ";
			}else{
				echo "<br/>error: " . mysqli_error();
			}
		?>
	</p>
</p>
</body>
</html>
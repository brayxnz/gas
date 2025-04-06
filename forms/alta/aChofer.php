<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="form.css"/>
</head>
<body>
    <?php include("..\menuNav.php"); ?>
    <div class="cont">
		<form action="..\..\php\aChoferPHP.php" method="GET" target="_self">
			<fieldset>
				<legend>Datos chofer</legend>
				<input type="text" name="nChofer" id="nChofer" placeholder="Nombre del chofer" required="yes" />
				<br/>
				<input type="date" name="cumpleChofer" id="cumpleChofer" placeholder="fecha de nacimiento" required="yes"/>
			</fieldset>
			<fieldset>
				<legend>Información laboral</legend>
				<input type="number" name="telChofer" pattern="^\+?(\d{1,3})?(\d{7,15})$" title="pon uno váldo D:<" id="telChofer" placeholder="Telefono del chofer" required="yes"/>
				<br/>
				<input type="number" name="licenciaChofer" id="licenciaChofer" placeholder="No. licencia" required="yes" title="pon uno váldo D:<" />
			</fieldset>
			<br/>
			<button type="submit" value="altaDist">Dar de alta</button>
		</form>
	</div>
</html>
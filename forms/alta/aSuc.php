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
                <legend>Datos de la sucursal</legend>
                <input type="text" name="dirSuc" id="dirSuc" placeholder="Nombre del Sucursal" required="yes" />
                <br/>
                <input type="number" name="capacidadSuc" id="capacidadSuc" placeholder="Capacidad en m3" required="yes"/>
            </fieldset>
            <fieldset>
                <legend>Información laboral</legend>
                <input type="text" name="contactoSuc" pattern="^\+?(\d{1,3})?(\d{7,15})$" title="pon uno váldo D:<" id="contactoSuc" placeholder="Telefono de contacto" required="yes"/>
                <br/>
                <input type="number" name="licenciaSucursal" id="licenciaSucursal" placeholder="No. licencia" required="yes" title="pon uno váldo D:<" />
            </fieldset>
            <br/>
            <input type="submit" name="btn" value="altaDist"/>
        </form>
    </div>
</body>
</html>
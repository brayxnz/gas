<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="form.css"/>
</head>
<?php include("..\menuNav.php"); ?>
<body>
    <div class="cont">
        <form action="..\..\php\aPipasPHP.php" method="GET" target="_self">
            <fieldset>
                <legend>Datos de la pipa</legend>
                <input type="text" name="pNombreChofer" id="pNombre" placeholder="Nombre de la pipa" required="yes" />
                <br/>
                <input type="number" name="pCapacidad" id="pCapacidad" placeholder="Capacidad de carga" required="yes"/>
            </fieldset>
            <fieldset>
                <legend>Información legal</legend>
                <input type="text" name="pMatricula" title="pon uno váldo D:<" id="pMatricula" placeholder="Matrícula vehicular" required="yes"/>
                <br/>
            </fieldset>
            <br/>
            <input type="submit" name="btn" value="altaDist"/>
	    </form>
    </div>
</body>
</html>
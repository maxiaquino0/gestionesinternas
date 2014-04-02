<?php
	require_once 'core/init.php';

?>
<html>
<head>
	<title>Ingreso de PNR</title>
	<link rel="StyleSheet" href="style/style.css" type="text/css">
</head>
<body>
	<h1 class="tituloprim">Gestion de PNR</h1>
	<br>
	<div id="menuhorizontal">
	<a href='index.php'>Inicio</a>
	<a href="menu_urg.php">Menu Urgencias</a>
	<a href="menu_pnr.php">Menu PNR</a>
	</div>
	<br><br>
	<label class="titulosec">Ingrese los datos pertinentes al PNR.</label>
	<br>
	<br>
	<form action="procesar_pnr.php" method="post">
	<label class="form">ANI:</label>
	<input type="text" name="anipnr" size="8">
	<br>
	<label class="form">Fecha del problema</label>
	<input type="text" name="fechpro" size="20">
	<br>
	<label class="form">Motivo del cliente:</label>
	<input type="text" name="motiv_cli" size="20">
	<br>
	<input type="submit" name="btoEnviar" value="Enviar"> 
	</form>
	<br>
	<img src="img/atento_logo.jpg" alt="Atento Logo" width="480" height="170">
	<br>
	<br>
	<label for="desarrollador"><font color="FFA302" size="1">Desarrollado por: Aquino Cristobal, Oriel Maximiliano.</font></label>
</body>
</html>


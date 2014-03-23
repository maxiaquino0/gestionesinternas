<?php
	require_once 'core/init.php';

?>
<html>
<head>
	<title>Ingreso de PNR</title>
</head>
<body bgcolor="06295F">
	<font color="FFA302" size="7" >Gestion de PNR</font>
	<br>
	<font color="FFFFFF" size="5">Ingrese los datos pertinentes al PNR.</font>
	<br>
	<br>
	<form action="procesar_pnr.php" method="post">
	<label for="aniurg" ><font color="FFA302">ANI:</font></label>
	<input type="text" name="anipnr" size="8">
	<br>
	<label for="domani" ><font color="FFA302">Fecha del problema</font></label>
	<input type="text" name="fechpro" size="20">
	<br>
	<label for="contani"><font color="FFA302">Motivo del cliente:</font></label>
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


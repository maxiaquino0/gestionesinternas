<?php
	require_once 'core/init.php';

?>
<html>
<head>
	<title>Ingreso de Urgencias</title>
</head>
<body bgcolor="06295F">
	<font color="FFA302" size="7" >Gestion de Urgencias</font>
	<br>
	<font color="FFFFFF" size="5">Ingrese los datos pertinentes a la Urgencia.</font>
	<br>
	<br>
	<form action="procesar_urgencia.php" method="post">
	<label for="aniurg" ><font color="FFA302">ANI:</font></label>
	<input type="text" name="aniurg" size="8">
	<br>
	<label for="domani" ><font color="FFA302">Domicilio del Cliente:</font></label>
	<input type="text" name="domani" size="20">
	<br>
	<label for="contani"><font color="FFA302">Contacto del cliente:</font></label>
	<input type="text" name="contani" size="20">
	<br>
	<label for="domurg"><font color="FFA302">Domicilio de urgencia: </font></label>
	<input type="text" name="domurg" size="20">
	<br>
	<label for="urg"><font color="FFA302">Motivo de urgencia</font></label>
	<input type="text" name="urg" size="20">
	<br>
	<label for="acla"><font color="FFA302">Aclaraciones:</font></label>
	<br>
	<textarea name="acla" rows="5" cols="30"></textarea>
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


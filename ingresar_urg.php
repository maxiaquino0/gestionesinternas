<?php
	require_once 'core/init.php';

?>
<html>
<head>
	<title>Ingreso de Urgencias</title>
	<link rel="StyleSheet" href="style/style.css" type="text/css">
</head>
<body>
	<h1 class="tituloprim">Gestion de Urgencias</h1>
	<br>
	<label class="titulosec">Ingrese los datos pertinentes a la Urgencia.</label>
	<br>
	<form action="procesar_urgencia.php" method="post">
	<label class="form">ANI:</label>
	<input type="text" name="aniurg" size="8">
	<br>
	<label class="form">Domicilio del Cliente:</label>
	<input type="text" name="domani" size="20">
	<br>
	<label class="form">Contacto del cliente:</label>
	<input type="text" name="contani" size="20">
	<br>
	<label class="form">Domicilio de urgencia:</label>
	<input type="text" name="domurg" size="20">
	<br>
	<label class="form">Motivo de urgencia:</label>
	<input type="text" name="urg" size="20">
	<br>
	<label class="form">Aclaraciones:</label>
	<br>
	<textarea name="acla" rows="5" cols="30"></textarea>
	<br>
	<input type="submit" name="btoEnviar" value="Enviar"> 
	</form>
	<br>
	<img src="img/atento_logo.jpg" alt="Atento Logo" width="480" height="150">
	<br>
	<br>
	<label for="desarrollador"><font color="FFA302" size="1">Desarrollado por: Aquino Cristobal, Oriel Maximiliano.</font></label>
</body>
</html>


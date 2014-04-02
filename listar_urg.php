<?php
	require_once 'core/init.php';

	
	$sql = "SELECT  *
			FROM urgencias
			";

	$urgencias = DB::getInstance()->consultar($sql,array())->results();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pantalla de inicio</title>
	<link rel="StyleSheet" href="style/style.css" type="text/css">
</head>
<body>
	<h1 class="tituloprim">Gestion de Urgencias</h1>
	<br>
	<div id="menuhorizontal">
	<a href='index.php'>Inicio</a>
	<a href="menu_urg.php">Menu Urgencias</a>
	<a href="menu_pnr.php">Menu PNR</a>
	</div>
	<br><br>
	<label class="titulosec">Lista de Urgencias.</label>
	<br><br>
	<div>
	<table border=1 class="mitabla">
		<tr class="tablaencab">
			<th>Identificador</th>
			<th>ANI</th>
			<th>Domicilio</th>
			<th>Contacto</th>
			<th>Domicilio Urgencia</th>
			<th>Urgencia</th>
			<th>Aclaraciones</th>
		</tr>
		<?php foreach ($urgencias as $row) { ?>
		<tr class="tabla">
			<td><?php echo $row->id  ?></td>
			<td><?php  echo $row->ani ?></td>
			<td><?php  echo $row->dom_ani ?></td>
			<td><?php  echo $row->contacto ?></td>
			<td><?php  echo $row->dom_urg ?></td>
			<td><?php  echo $row->urg ?></td>
			<td><?php  echo $row->aclaraciones ?></td>
		</tr>
		<?php } ?>
	</table>
	</div>

</body>
</html>

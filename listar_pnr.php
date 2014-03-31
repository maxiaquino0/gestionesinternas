<?php
	require_once 'core/init.php';

	
	$sql = "SELECT  *
			FROM pnr
			";

	$pnr = DB::getInstance()->consultar($sql,array())->results();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de PNR</title>
	<link rel="StyleSheet" href="style/style.css" type="text/css">
</head>
<body>
	<h1 class="tituloprim">Gestion de PNR</h1>
	<br>
	<div id="menu">
	<a href='index.php'>Inicio</a>
	<a href="menu_urg.php">Menu Urgencias</a>
	<a href="menu_pnr.php">Menu PNR</a>
	</div>
	<br><br>
	<label class="titulosec">Lista de PNR.</label>
	<br><br>
	<div>
	<table border=1 class="mitabla">
		<tr class="tablaencab">
			<th>Identificador</th>
			<th>ANI</th>
			<th>Fecha del problema</th>
			<th>Motivo del cliente</th>
		</tr>
		<?php foreach ($pnr as $row) { ?>
		<tr class="tabla">
			<td><?php echo $row->id  ?></td>
			<td><?php  echo $row->ani ?></td>
			<td><?php  echo $row->fecha_problema ?></td>
			<td><?php  echo $row->motiv_cli ?></td>
		</tr>
		<?php } ?>
	</table>
	</div>
</body>
</html>

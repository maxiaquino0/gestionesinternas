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
</head>
<body>
	<a href='index.php'>Inicio</a>
	<br><br>
	<table border=1 class="mitabla">
		<tr>
			<th>Identificador</th>
			<th>ANI</th>
			<th>Fecha del problema</th>
			<th>Motivo del cliente</th>
		</tr>
		<?php foreach ($pnr as $row) { ?>
		<tr>
			<td><?php echo $row->id  ?></td>
			<td><?php  echo $row->ani ?></td>
			<td><?php  echo $row->fecha_problema ?></td>
			<td><?php  echo $row->motiv_cli ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

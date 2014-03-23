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
</head>
<body>
	<a href='index.php'>Inicio</a>
	<br><br>
	<table border=1 class="mitabla">
		<tr>
			<th>Identificador</th>
			<th>ANI</th>
			<th>Domicilio</th>
			<th>Contacto</th>
			<th>Domicilio Urgencia</th>
			<th>Urgencia</th>
			<th>Aclaraciones</th>
		</tr>
		<?php foreach ($urgencias as $row) { ?>
		<tr>
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
</body>
</html>

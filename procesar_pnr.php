<?php
	require_once 'core/init.php';

	$bto = $_POST["btoEnviar"];
	if (!empty($bto)) {
		//esta funcion me trae todos los valores ingresado por el post en variables $name del formulario html
		extract($_POST);
		$sql = "INSERT INTO pnr VALUE (
				null,?,?,?
			)";
		$query = DB::getInstance()->consultar($sql,array(
			$anipnr,$fechpro,$motiv_cli));

		if ($query->error()) {
			//error
			header("Location: listar_pnr.php");
		}else{
			//todo ok
			header("Location: listar_pnr.php");
		}
		var_dump($query);
	}else{
		echo "No se mandaron datos para insertar";
	}


?>
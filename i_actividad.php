<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar datos</title>
</head>
<body>
	<?php
	// si en el formulario no se selecciono la restriccion .... no la mandra asi la forzamos a guardar en la bbdd
	if ($_POST){
		if (isset($_POST['restriccion']))
		{
			$res=0;
		}else{
			$res=1;
		}
		print_r($_POST);
		echo "<br>";
		require_once ("Db.php");
		$sql = "INSERT INTO actividad (id_act, nombre, cuota, restriccion, horario) VALUES ('" . ''. "','". $_POST['nombre']. "',".  $_POST['cuota'] . ","  .  $res . ",'" . $_POST['horario']."')";


	
		echo $sql;
		Db::ejecutaSentencia ($sql);
	}else
	{
		echo "nada que mostrar";
	}
	?>
</body>
</html>



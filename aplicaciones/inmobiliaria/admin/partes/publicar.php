

<?php
	if (!empty($_POST))
	{
		$partes = $_POST;
		
		if (!empty($_FILES["foto"]["tmp_name"]))
		{
			move_uploaded_file($_FILES["foto"]["tmp_name"], '../fotos/' . $_FILES["foto"]["name"]);
			$partes[] = "fotos/" . $_FILES["foto"]["name"];
		}
		else
		{
			$partes[] = '';
		}

		$linea = implode(";", $partes);
		$linea = $linea . "\r\n";

		file_put_contents("casas.txt", $linea, FILE_APPEND);

		include('partes/formulario_casa_nueva_exito.php');
	}
	else
	{
		include("partes/formulario_casa_nueva.php");
	}
?>
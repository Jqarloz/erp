<?php
	//$conecta = mysqli_connect('localhost', 'root', '', 'ERP') or die("Error al conectar con la BD")
	$conecta = new mysqli("localhost", "root", "", "ERP");

	if(mysqli_connect_error()){
		echo "Conexion Fallida : ", mysqli_connect_error();
		exit();
	}
?>
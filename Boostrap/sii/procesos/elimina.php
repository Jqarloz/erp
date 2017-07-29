<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../inclusiones/links-procesos.html'; ?>
	<title>Eliminando...</title>
</head>
<body>
	<?php 

	include '../biblioteca/configServidor.php';
	include '../biblioteca/consulSQL.php';

	$id=$_GET['id'];
	$ide=$_GET['ide'];

	if ($id==1) {
		$nombretabla="alumno";
		$condena="Matricula='".$ide."'";
		$eliminar=consultasSQL::DeleteSQL($nombretabla, $condena);
		if ($eliminar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Registro eliminado correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../enlistar.php?id=".$id."");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡El registro no fue eliminado!", timer: 4000, showConfirmButton: false})</script>';
			echo "<script>setTimeout('window.history.back()',4000)</script>";
		}
	}
	elseif ($id==2) {
		$nombretabla="profesor";
		$condena="CodProfesor='".$ide."'";
		$eliminar=consultasSQL::DeleteSQL($nombretabla, $condena);
		if ($eliminar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Registro eliminado correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../enlistar.php?id=".$id."");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡El registro no fue eliminado!", timer: 4000, showConfirmButton: false})</script>';
			echo "<script>setTimeout('window.history.back()',4000)</script>";
		}
	}
	elseif ($id==3) {
		$nombretabla="materia";
		$condena="Clave='".$ide."'";
		$eliminar=consultasSQL::DeleteSQL($nombretabla, $condena);
		if ($eliminar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Registro eliminado correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../enlistar.php?id=".$id."");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡El registro no fue eliminado!", timer: 4000, showConfirmButton: false})</script>';
			echo "<script>setTimeout('window.history.back()',4000)</script>";
		}
	}
	else {
		echo '<script>swal({title: "¡Error!'.'", text: "¡No juegue con la url!", timer: 8000, showConfirmButton: false})</script>';
		echo "<script>setTimeout('window.history.back()',8000)</script>";
	}

	 ?>
</body>
</html>
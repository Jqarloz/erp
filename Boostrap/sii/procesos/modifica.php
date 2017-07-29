<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../inclusiones/links-procesos.html'; ?>
	<title>Modificando...</title>
</head>
<body>
	<?php 

	include '../biblioteca/configServidor.php';
	include '../biblioteca/consulSQL.php';

	$id=$_GET['id'];

	if ($id==1) {
		$matricula=$_POST['matricula'];
		$nombre=$_POST['nombrealumno'];
		$ap=$_POST['apalumno'];
		$am=$_POST['amalumno'];
		$fechan=$_POST['fecha'];
		$calle=$_POST['callealumno'];
		$numero=$_POST['numerocalle'];
		$municipio=$_POST['nombremunicipio'];
		$estado=$_POST['nombreestado'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];

		$nombretabla="alumno";
		$columnas="Nombre='".$nombre."', AP='".$ap."', AM='".$am."', FechaNac='".$fechan."', Calle='".$calle."', Numero='".$numero."', Municipio='".$municipio."', Estado='".$estado."', Correo='".$correo."', telefono='".$telefono."'";
		$condena="Matricula='".$matricula."'";

		$actualizar=consultasSQL::UpdateSQL($nombretabla, $columnas, $condena);
		if ($actualizar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Información actualizada correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../enlistar.php?id=".$id."");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡La información no fue actualizada!", timer: 4000, showConfirmButton: false})</script>';
			echo "<script>setTimeout('window.history.back()',4000)</script>";
		}
	}
	elseif ($id==2) {
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombreprofesor'];
		$ap=$_POST['approfesor'];
		$am=$_POST['amprofesor'];
		$calle=$_POST['calleprofesor'];
		$numero=$_POST['numerocalle'];
		$municipio=$_POST['nombremunicipio'];
		$estado=$_POST['nombreestado'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];

		$nombretabla="profesor";
		$columnas="Nombre='".$nombre."', AP='".$ap."', AM='".$am."', Calle='".$calle."', Numero='".$numero."', Municipio='".$municipio."', Estado='".$estado."', Correo='".$correo."', telefono='".$telefono."'";
		$condena="CodProfesor='".$codigo."'";

		$actualizar=consultasSQL::UpdateSQL($nombretabla, $columnas, $condena);
		if ($actualizar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Información actualizada correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../enlistar.php?id=".$id."");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡La información no fue actualizada!", timer: 4000, showConfirmButton: false})</script>';
			echo "<script>setTimeout('window.history.back()',4000)</script>";
		}
	}
	elseif ($id==3) {
		$clave=$_POST['clave'];
		$nombre=$_POST['nombreasignatura'];
		$objetivo=$_POST['objetivoasignatura'];
		$creditos=$_POST['creditosasignatura'];
		$cuatrimestre=$_POST['cuatrimestre'];

		$nombretabla="materia";
		$columnas="Nombre='".$nombre."', Objetivo='".$objetivo."', Creditos='".$creditos."', Cuatrimestre='".$cuatrimestre."'";
		$condena="Clave='".$clave."'";

		$actualizar=consultasSQL::UpdateSQL($nombretabla, $columnas, $condena);
		if ($actualizar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Información actualizada correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../enlistar.php?id=".$id."");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡La información no fue actualizada!", timer: 4000, showConfirmButton: false})</script>';
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
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../inclusiones/links-procesos.html'; ?>
	<title>Insertando...</title>
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
		$columnas="Matricula, Nombre, AP, AM, FechaNac, Calle, Numero, Municipio, Estado, Correo, telefono";
		$datos="'".$matricula."', '".$nombre."', '".$ap."', '".$am."', '".$fechan."', '".$calle."', '".$numero."', '".$municipio."', '".$estado."', '".$correo."', '".$telefono."'";

		$insertar=consultasSQL::InsertSQL($nombretabla, $columnas, $datos);
		if ($insertar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Información insertada correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../index.php");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡La información no fue insertada!", timer: 4000, showConfirmButton: false})</script>';
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
		$columnas="CodProfesor, Nombre, AP, AM, Calle, Numero, Municipio, Estado, Correo, telefono";
		$datos="'".$codigo."', '".$nombre."', '".$ap."', '".$am."', '".$calle."', '".$numero."', '".$municipio."', '".$estado."', '".$correo."', '".$telefono."'";

		$insertar=consultasSQL::InsertSQL($nombretabla, $columnas, $datos);
		if ($insertar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Información insertada correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../index.php");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡La información no fue insertada!", timer: 4000, showConfirmButton: false})</script>';
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
		$columnas="Clave, Nombre, Objetivo, Cuatrimestre, Creditos";
		$datos="'".$clave."', '".$nombre."', '".$objetivo."', '".$cuatrimestre."', '".$creditos."'";

		$insertar=consultasSQL::InsertSQL($nombretabla, $columnas, $datos);
		if ($insertar) {
			echo '<script>swal({title: "¡Hecho!'.'", text: "¡Información insertada correctamente!", timer: 4000, showConfirmButton: false})</script>';
			ob_start();
			header("refresh: 4; url = ../index.php");
			ob_end_flush();
		}
		else {
			echo '<script>swal({title: "¡Ha ocurrido un error!'.'", text: "¡La información no fue insertada!", timer: 4000, showConfirmButton: false})</script>';
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
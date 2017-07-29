<!DOCTYPE html>
<html lang="en">
<head>
	<?php include './inclusiones/links.html'; ?>
	<title>Listado</title>
</head>
<body>
	<?php include './inclusiones/navegacion.html'; ?>
	<section>
		<div class="jumbotron">
			<div class="container">
				<div>
					<?php include './biblioteca/configServidor.php'; ?>
					<?php include './biblioteca/consulSQL.php'; ?>
				</div>
				<?php 

				$id=$_GET['id'];

				if ($id==1) {
					echo '<div class="table-responsive">';
					echo '<h1>Alumnos inscritos en el sistema</h1>';
					echo '<table class="table table-hover">';
					echo '	<tr>';
					echo '		<td class="primary"><strong>Matricula</strong></td>';
					echo '		<td class="active"><strong>Nombre</strong></td>';
					echo '		<td class="active"><strong>Apellido paterno</strong></td>';
					echo '		<td class="active"><strong>Apellido materno</strong></td>';
					echo '		<td class="active"><strong>Fecha de nacimiento</strong></td>';
					echo '		<td class="warning"><strong>Calle</strong></td>';
					echo '		<td class="warning"><strong>Número</strong></td>';
					echo '		<td class="warning"><strong>Municipio</strong></td>';
					echo '		<td class="warning"><strong>Estado</strong></td>';
					echo '		<td class="info"><strong>Correo electrónico</strong></td>';
					echo '		<td class="info"><strong>Teléfono</strong></td>';
					echo '		<td class="danger"><strong><img src="./recursos/imagenes/delete.png" alt="Eliminar alumno" width="28 px"></strong></td>';
					echo '		<td class="primary"><strong><img src="./recursos/imagenes/update-fixed.png" alt="Modificar alumno" width="28 px"></strong></td>';
					echo '</tr>';
					$extraer=ejecutarSQL::consultar('select * from alumno'); 
					@$numerodefilas=mysql_num_rows($extraer);
					while ($llenar=mysql_fetch_array($extraer)) {
						echo '<tr>';
						echo '<td class="primary">'.$llenar['Matricula'].'</td>';
						echo '<td class="active">'.$llenar['Nombre'].'</td>';
						echo '<td class="active">'.$llenar['AP'].'</td>';
						echo '<td class="active">'.$llenar['AM'].'</td>';
						echo '<td class="active">'.$llenar['FechaNac'].'</td>';
						echo '<td class="warning">'.$llenar['Calle'].'</td>';
						echo '<td class="warning">'.$llenar['Numero'].'</td>';
						echo '<td class="warning">'.$llenar['Municipio'].'</td>';
						echo '<td class="warning">'.$llenar['Estado'].'</td>';
						echo '<td class="info">'.$llenar['Correo'].'</td>';
						echo '<td class="info">'.$llenar['telefono'].'</td>';
						$ide=$llenar['Matricula'];
						echo '<td class="danger">'.'<a href="./procesos/elimina.php?ide='.$ide.'&id='.$id.'">Eliminar</a>'.'</td>';
						echo '<td class="primary">'.'<a href="modificar.php?ide='.$ide.'&id='.$id.'">Modificar</a>'.'</td>';
					}
					echo '</table>';
					echo '</div>';
				}
				elseif ($id==2) {
					echo '<div class="table-responsive">';
					echo '<h1>Profesores inscritos en el sistema</h1>';
					echo '<table class="table table-hover">';
					echo '	<tr>';
					echo '		<td class="primary"><strong>Matricula</strong></td>';
					echo '		<td class="active"><strong>Nombre</strong></td>';
					echo '		<td class="active"><strong>Apellido paterno</strong></td>';
					echo '		<td class="active"><strong>Apellido materno</strong></td>';
					echo '		<td class="warning"><strong>Calle</strong></td>';
					echo '		<td class="warning"><strong>Número</strong></td>';
					echo '		<td class="warning"><strong>Municipio</strong></td>';
					echo '		<td class="warning"><strong>Estado</strong></td>';
					echo '		<td class="info"><strong>Correo electrónico</strong></td>';
					echo '		<td class="info"><strong>Teléfono</strong></td>';
					echo '		<td class="danger"><strong><img src="./recursos/imagenes/delete.png" alt="Eliminar profesor" width="28 px"></strong></td>';
					echo '		<td class="primary"><strong><img src="./recursos/imagenes/update-fixed.png" alt="Modificar profesor" width="28 px"></strong></td>';
					echo '</tr>';
					$extraer=ejecutarSQL::consultar('select * from profesor'); 
					@$numerodefilas=mysql_num_rows($extraer);
					while ($llenar=mysql_fetch_array($extraer)) {
						echo '<tr>';
						echo '<td class="primary">'.$llenar['CodProfesor'].'</td>';
						echo '<td class="active">'.$llenar['Nombre'].'</td>';
						echo '<td class="active">'.$llenar['AP'].'</td>';
						echo '<td class="active">'.$llenar['AM'].'</td>';
						echo '<td class="warning">'.$llenar['Calle'].'</td>';
						echo '<td class="warning">'.$llenar['Numero'].'</td>';
						echo '<td class="warning">'.$llenar['Municipio'].'</td>';
						echo '<td class="warning">'.$llenar['Estado'].'</td>';
						echo '<td class="info">'.$llenar['Correo'].'</td>';
						echo '<td class="info">'.$llenar['telefono'].'</td>';
						$ide=$llenar['CodProfesor'];
						echo '<td class="danger">'.'<a href="./procesos/elimina.php?ide='.$ide.'&id='.$id.'">Eliminar</a>'.'</td>';
						echo '<td class="primary">'.'<a href="modificar.php?ide='.$ide.'&id='.$id.'">Modificar</a>'.'</td>';
					}
					echo '</table>';
					echo '</div>';
				}
				elseif ($id==3) {
					echo '<div class="table-responsive">';
					echo '<h1>Asignaturas disponibles en el sistema</h1>';
					echo '<table class="table table-hover">';
					echo '	<tr>';
					echo '		<td class="primary"><strong>Clave</strong></td>';
					echo '		<td class="active"><strong>Nombre</strong></td>';
					echo '		<td class="warning"><strong>Objetivo</strong></td>';
					echo '		<td class="info"><strong>Cuatrimestre</strong></td>';
					echo '		<td class="info"><strong>Créditos</strong></td>';
					echo '		<td class="danger"><strong><img src="./recursos/imagenes/delete.png" alt="Eliminar asignatura" width="28 px"></strong></td>';
					echo '		<td class="primary"><strong><img src="./recursos/imagenes/update-fixed.png" alt="Modificar asignatura" width="28 px"></strong></td>';
					echo '</tr>';
					$extraer=ejecutarSQL::consultar('select * from materia'); 
					@$numerodefilas=mysql_num_rows($extraer);
					while ($llenar=mysql_fetch_array($extraer)) {
						echo '<tr>';
						echo '<td class="primary">'.$llenar['Clave'].'</td>';
						echo '<td class="active">'.$llenar['Nombre'].'</td>';
						echo '<td class="warning">'.$llenar['Objetivo'].'</td>';
						echo '<td class="info">'.$llenar['Cuatrimestre'].'</td>';
						echo '<td class="info">'.$llenar['Creditos'].'</td>';
						$ide=$llenar['Clave'];
						echo '<td class="danger">'.'<a href="./procesos/elimina.php?ide='.$ide.'&id='.$id.'">Eliminar</a>'.'</td>';
						echo '<td class="primary">'.'<a href="modificar.php?ide='.$ide.'&id='.$id.'">Modificar</a>'.'</td>';
					}
					echo '</table>';
					echo '</div>';
				}
				else {
					echo '<script>swal({title: "¡Error!'.'", text: "¡No juegue con la url!", timer: 8000, showConfirmButton: false})</script>';
					echo "<script>setTimeout('window.history.back()',8000)</script>";
				}
				?>
				
			</div>
		</div>
	</section>
	<?php include './inclusiones/pie.html'; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include './inclusiones/links.html'; ?>
	<title>Taller de Interfáz humano máquina con registro de datos</title>
</head>
<body>
	<?php include './inclusiones/navegacion.html'; ?>
	<section>
		<div class="jumbotron">
			<div class="container">
				<center><h1>SII para alumnos y profesores.</h1></center>
				<center><h2><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Panel de control.</h2></center>
				<div class="row">
					<div class="col-md-4 thumbnail"><legend>Control de alumnos:</legend>
						<a href="./insertar.php?id=1" class="btn btn-primary btn-block"><b><span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar alumno al sistema</b></a>
						<a href="./enlistar.php?id=1" class="btn btn-warning btn-block"><b><span class="glyphicon glyphicon-remove"></span>&nbsp;Mostrar alumnos inscritos</b></a>
					</div>
					<div class="col-md-4 thumbnail"><legend>Control de profesores:</legend>
						<a href="./insertar.php?id=2" class="btn btn-primary btn-block"><b><span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar profesor al sistema</b></a>
						<a href="./enlistar.php?id=2" class="btn btn-warning btn-block"><b><span class="glyphicon glyphicon-remove"></span>&nbsp;Mostrar profesores inscritos</b></a>
					</div>
					<div class="col-md-4 thumbnail"><legend>Control de asignaturas:</legend>
						<a href="./insertar.php?id=3" class="btn btn-primary btn-block"><b><span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar asignatura al sistema</b></a>
						<a href="./enlistar.php?id=3" class="btn btn-warning btn-block"><b><span class="glyphicon glyphicon-remove"></span>&nbsp;Mostrar asignaturas disponibles</b></a>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<form role="search" name="buscador" method="POST" action="./procesos/busca.php">
							<input name="criterio" type="text" class="form-control btn-block" placeholder="Buscar alumno, profesor o materia">
							<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-search"></span>&nbsp;Buscar</button>
						</form>
					</div>
					<div class="col-md-3"></div>
				</div> -->
			</div>
		</div>
	</section>
	<?php include './inclusiones/pie.html'; ?>
</body>
</html>
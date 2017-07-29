<!DOCTYPE html>
<html lang="en">
<head>
	<?php include './inclusiones/links.html'; ?>
	<title> + Agregar </title>
</head>
<body>
	<?php include './inclusiones/navegacion.html'; ?>
	<?php 

	$id=$_GET['id'];

	if ($id==1) {
		echo '
		<section>
			<div class="jumbotron">
				<div class="container">
					<center><h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar alumno</h1></center>
					<div class="row">
						<form role="form" name="registrodealumnos" method="POST" action="./procesos/inserta.php?id='.$id.'">
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label for="matricula-alumno">Matrícula</label>
									<input name="matricula" type="number" class="form-control" id="matricula-id" placeholder="Escriba la matricula" title="Escribir aquí su matricula" required>
									<span class="glyphicon glyphicon-education form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="nombre-alumno">Nombre</label>
									<input name="nombrealumno" type="text" class="form-control" id="nombre-id" placeholder="Escriba el nombre del alumno" title="Escriba el nombre sin comillas" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="ap-alumno">Apellido paterno</label>
									<input name="apalumno" type="text" class="form-control" id="ap-id" placeholder="Escriba el apellido paterno del alumno" title="Escriba el apellido sin comillas" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="am-alumno">Apellido materno</label>
									<input name="amalumno" type="text" class="form-control" id="am-id" placeholder="Escriba el apellido materno del alumno" title="Escriba el apellido sin comillas" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="fecha-nacimiento">Fecha de nacimiento</label>
									<input name="fecha" type="date" class="form-control" id="fecha-id" title="Fecha de nacimiento" plsceholder="aaaa-mm-dd" required>
									<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
								</div>
							</div>
							<div class="col-md-4">
								<legend class="label-warning text-center"><h4>Domicilio:</h4></legend>
								<div class="row">
									<div class="form-group has-feedback col-md-7">
										<label for="calle">Calle</label>
										<input name="callealumno" type="text" class="form-control" id="calle-alumno-id" placeholder="Nombre de la calle" title="Escribir aquí la calle donde vive" required>
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback col-md-5">
										<label for="numero">Número</label>
										<input name="numerocalle" type="number" class="form-control" id="numero-calle-id" title="Escribir aquí el número de casa" required>
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
								</div>
								<div class="row">
									<div class="form-group has-feedback col-md-7">
										<label for="nombre-municipio">Municipio</label>
										<input name="nombremunicipio" type="text" class="form-control" id="nombre-municipio-id" placeholder="Nombre del municipio" title="Escribe el nombre del municipio" required>
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback col-md-5">
										<label for="nombre-estado">Estado</label>
										<input name="nombreestado" type="text" class="form-control" id="nombre-estado-id" placeholder="Nombre del estado" title="Escribir aquí el nombre del estado" required>
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<legend class="label-info text-center"><h4>Contácto:</h4></legend>
								<div class="form-group has-feedback">
									<label for="numero-telefono">Telefono</label>
									<input name="telefono" type="number" class="form-control" id="telefono-id" placeholder="Número de telefono" title="Escribe el número de telefono" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="correo-electronico">Correo</label>
									<input name="correo" type="email" class="form-control" id="correo-electronico-id" placeholder="Escriba el correo electrónico" title="Escribir aquí el correo electrónico" required>
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
								</div>
							</div>
							<button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</section>';
	}
	elseif ($id==2) {
		echo '
		<section>
			<div class="jumbotron">
				<div class="container">
					<center><h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar profesor</h1></center>
					<div class="row">
						<form role="form" name="registrodeprofesores" method="POST" action="./procesos/inserta.php?id='.$id.'">
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label for="matricula-profesor">Código de profesor</label>
									<input name="codigo" type="number" class="form-control" id="matricula-id" placeholder="Escriba la matricula" title="Escribir aquí su matricula" required>
									<span class="glyphicon glyphicon-education form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="nombre-profesor">Nombre</label>
									<input name="nombreprofesor" type="text" class="form-control" id="nombre-id" placeholder="Escriba el nombre del profesor" title="Escriba el nombre sin comillas" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="ap-profesor">Apellido paterno</label>
									<input name="approfesor" type="text" class="form-control" id="ap-id" placeholder="Escriba el apellido paterno del profesor" title="Escriba el apellido sin comillas" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="am-profesor">Apellido materno</label>
									<input name="amprofesor" type="text" class="form-control" id="am-id" placeholder="Escriba el apellido materno del profesor" title="Escriba el apellido sin comillas" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
							</div>
							<div class="col-md-4">
								<legend class="label-warning text-center"><h4>Domicilio:</h4></legend>
								<div class="row">
									<div class="form-group has-feedback col-md-7">
										<label for="calle">Calle</label>
										<input name="calleprofesor" type="text" class="form-control" id="calle-profesor-id" placeholder="Nombre de la calle" title="Escribir aquí la calle donde vive" required>
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback col-md-5">
										<label for="numero">Número</label>
										<input name="numerocalle" type="number" class="form-control" id="numero-calle-id" title="Escribir aquí el número de casa" required>
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
								</div>
								<div class="row">
									<div class="form-group has-feedback col-md-7">
										<label for="nombre-municipio">Municipio</label>
										<input name="nombremunicipio" type="text" class="form-control" id="nombre-municipio-id" placeholder="Nombre del municipio" title="Escribe el nombre del municipio" required>
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback col-md-5">
										<label for="nombre-estado">Estado</label>
										<input name="nombreestado" type="text" class="form-control" id="nombre-estado-id" placeholder="Nombre del estado" title="Escribir aquí el nombre del estado" required>
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<legend class="label-info text-center"><h4>Contácto:</h4></legend>
								<div class="form-group has-feedback">
									<label for="numero-telefono">Telefono</label>
									<input name="telefono" type="number" class="form-control" id="telefono-id" placeholder="Número de telefono" title="Escribe el número de telefono" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="correo-electronico">Correo</label>
									<input name="correo" type="email" class="form-control" id="correo-electronico-id" placeholder="Escriba el correo electrónico" title="Escribir aquí el correo electrónico" required>
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
								</div>
							</div>
							<button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</section>';
	}
	elseif ($id==3) {
		echo '
		<section>
			<div class="jumbotron">
				<div class="container">
					<center><h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar asignatura</h1></center>
					<div class="row">
						<form role="form" name="registrodeasignatura" method="POST" action="./procesos/inserta.php?id='.$id.'">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<label for="clave-asignatura">Clave</label>
									<input name="clave" type="number" class="form-control" id="clave-id" placeholder="Escriba la clave" title="Escribir aquí la clave de la asignatura" required>
									<span class="glyphicon glyphicon-education form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="nombre-asignatura">Nombre</label>
									<input name="nombreasignatura" type="text" class="form-control" id="nombre-id" placeholder="Escriba el nombre de la asignatura" title="Escriba el nombre de la asignatura" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="objetivo-asignatura">Objetivo</label>
									<input name="objetivoasignatura" type="text" class="form-control" id="objetivo-id" placeholder="Escriba el objetivo de la asignatura" title="Escriba el objetivo" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="creditos-asignatura">Créditos</label>
									<input name="creditosasignatura" type="text" class="form-control" id="creditos-id" placeholder="Escriba los créditos de la asignatura" title="Escriba los créditos" required>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label for="cuatrimestre-asignatura">Cuatrimestre</label>
									<input name="cuatrimestre" type="number" class="form-control" id="cuatrimestre-id" title="Cuatrimestre de la asignatura" required>
									<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
								</div>
							</div>
							<button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</section>';
	}
	else {
		echo '<script>swal({title: "¡Error!'.'", text: "¡No juegue con la url!", timer: 8000, showConfirmButton: false})</script>';
		echo "<script>setTimeout('window.history.back()',8000)</script>";
	}
	?>

	<?php include './inclusiones/pie.html'; ?>
</body>
</html>
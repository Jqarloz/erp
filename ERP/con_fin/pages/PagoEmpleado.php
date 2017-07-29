<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Pago De Empleado</title>
<meta name="" content="">
</head>
<body>

<!-- Que nunca Falte!!! -->
<!-- procesos -->
<?php 
include("../../../config.php"); 
include("../components.html"); 
include("../../../conexion.php");

if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 

if($_SESSION['accType']!= 10 && $_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo contabilidad y finanzas")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>
<!-- ok -->

<div class="row">
<form class="col s6 offset-s3">
<table class="responsive-table centered">
	<tr>
		<td>IdEmpleado: </td>
		<td><input type="number" name="idemple"/></td>		
		
	</tr>
	
	<tr>
		<td>Nombre: </td>
		<td><input type="text" name="nombre"/></td>
	</tr>
	<tr>
		<td>Apellido paterno: </td>
		<td><input type="text" name="ap"/></td>
	</tr>
	<tr>
		<td>Apellido materno: </td>
		<td><input type="text" name="am"/></td>
	</tr>
	<tr>
		<td>Fecha inicial de pago: </td>
		<td><input type="date" name="fechainicial"/></td>
	</tr>
	<tr>
		<td>Fecha final de pago: </td>
		<td><input type="date" name="fechafinal"/></td>
	</tr>
	<tr>
		<td>Salario:</td>
		<td><input type="number" name="salario" size="6" /></td>
	</tr>
	
	<tr>
		<td>Tipo bono</td>
		<td><input type="number" name="bono"/></td>
	</tr>
	
	<tr>
		<td>Descuento: </td>
		<td><input type="number" name="desc"/></td>
	</tr>
	
	
	<tr>
		<td>Area: </td>
		<td><select name="tipoarea">
		   <option></option>
			<option value="area1">Area 1</option>
			<option value="area2">Area 2</option>
			<option value="area3">Area 3</option>
			<option value="area4">Area 4</option>
			<option value="area5">Area 5</option>
			
			
		</select></td>
		
		
	</tr>
	
	<tr>
		<td>Numero de seguro: </td>
		<td><input type="text" name="numseguro" size="6" /></td>
	</tr>
	
	<tr>
	<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar" class="waves-effect waves-light btn"/>&nbsp;&nbsp;&nbsp;<input type="button" name="cancelar" value="Cancelar" class="waves-effect waves-light btn"/></td>
	</tr>
</table>
</form>
</div>


</body>
</html>
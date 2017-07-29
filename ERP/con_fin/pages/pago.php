<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Pago De Servicio</title>
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
<td>Fecha inicio: </td>
<td><input type="date" name="fechainicio"/></td>
</tr>

<tr> 
<td>Fecha final: </td>
<td><input type="date" name="fechafinal"/></td>
</tr>

	<tr>
		<td>Tipo de servicio: </td>
		<td>
			<select name="tipopago">
				<option disabled selected>Escoja servicio</option>
				<option value="luz">Luz</option>
				<option value="agua">Agua</option>
				<option value="renta">Renta</option>
				<option value="telefonia">Telefonia Internet</option>
				<option value="cable">Cable Television</option>
				<option value="otros">Otros</option>
			</select>
		</td>
		
	</tr>
	<tr>
		<td>Descripcion: </td>
		<td><textarea name="desc" class="materialize-textarea"> </textarea></td>
	</tr>
	<tr>
		<td>Pago total: </td>
		<td><input type="number" name="total"/></td>
	</tr>
	
	
	<tr>
	<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar" class="waves-effect waves-light btn" />&nbsp;&nbsp;&nbsp;<input type="button" name="cancelar" value="Cancelar" class="waves-effect waves-light btn"/></td>
	</tr>
	
</table>	
</form>
</div>

</body>
</html>
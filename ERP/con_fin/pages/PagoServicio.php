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
include("../../../config.php"); 
include("components.php"); 
include("../../../conexion.php"); 
?>
<!-- ok -->

<form name="pagoser" method="post">

<center><h3>Pago De Servicio</h3><br/></center>
<div class="container">
<div class="col s6 offset-s3">
<table class="responsive-table centered">

<tr> 
<td>Fecha inicio: </td>
<td><input type="date" name="fechainicio" class="datepicker"/></td>
</tr>

<tr> 
<td>Fecha final: </td>
<td><input type="date" name="fechafinal" class="datepicker"/></td>
</tr>

<tr>
	<td>Servicio</td>
		<td><select name="servicio">
			<option></option>
			<?php
			$consultaser=mysqli_query($conecta, "select * from servicios;");
				while($resultados= mysqli_fetch_array($consultaser)){
					echo'<option value='.$resultados['idServicios'].'>'.$resultados['TipoServicio'].'</option>';
				}
			?>
												
			</select></td>							
</tr>

	<tr>
		<td>Descripcion: </td>
		<td><textarea name="desc" placeholder="Agrega una descripcion acerca del pago de servico"></textarea></td>
	</tr>
	<tr>
		<td>Pago total: </td>
		<td><input type="number" name="total" /></td>
	</tr>
	
	
	<tr>
	<td colspan="2" align="center">
	<button class="btn waves-effect waves-light" type="submit" name="Guardar">Guardar
	    <i class="material-icons right">send</i>
	</button>
	<button class="btn waves-effect waves-light red" type="submit" name="Cancelar">Cancelar
	</button>
	</td>
	</tr>
	
</table>
</div>
</div>
	
	
</form>

</body>
</html>

<?php

@$Servicio = $_POST['servicio'];
@$FechaInicio = $_POST['fechainicio'];
@$FechaFinal = $_POST['fechafinal'];
@$Descripcion = $_POST['desc'];
@$Total = $_POST['total'];

if(isset($Servicio) and isset($FechaInicio) and isset($FechaFinal) and isset($Total) and isset($Descripcion)){
	$insertaPagoS=mysqli_query($conecta, "insert into pagoservicio values(NULL, '$FechaInicio', '$FechaFinal', '$Total', '$Descripcion', '$Servicio');");
	//echo $Id, $Servicio, $FechaInicio, $FechaFinal, $Descripcion, $Total;
	
	if ($insertaPagoS){
		echo '<script type="text/javascript">';
		echo 'alert("El Pago del servicio se registro correctamente.")';
		echo "</script>";
	}
	
	else {
		echo '<script type="text/javascript">';
		echo 'alert("Error: El Pago NO se registro. Vuelve a intentarlo.")';
		echo "</script>";
	}
 }
?>
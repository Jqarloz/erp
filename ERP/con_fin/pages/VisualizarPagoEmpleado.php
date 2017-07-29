<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Visualizar Pago Empleado</title>
<meta name="" content="">
</head>
<body>
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
<h3 align="center">Visualizar Pago Empleado</h3>

			<div class="container">
      		<div class="col s6 offset-s3">		
<form method="post" action="ImprimirPago.php">
				<table class="responsive-table centered">
					<tr>
						<td>ID Empleado:</td>
						<td><input maxlength="20" type="number" name="idempleado"  placeholder="ID Empleado" required="required"/></td>
					</tr>
					<tr>
						<td colspan="2"><a href="BuscarEmpleado.php" class="btn waves-effect waves-light">Buscar ID</a></td>
					</tr>
					
					<tr>
						<td>Nombre Empleado:</td>
						<td><input type="text" name="nombreE" placeholder="Nombre Empleado" required="required"/></td>
						
					</tr>
					
					<tr>
						<div class="container center">
							<td align="center" colspan="2"><b>Ingresa El Periodo de Pago</b></td>
						</div>
						
						
					</tr>
					
	
					
					<tr>
						<td align="center">Fecha Inicial</td>
						<td align="center"><input type="date" name="fechai" required="required" class="datepicker"/></td>
						
						
					</tr>
					
					<tr>
					
						<td align="center">Fecha Final</td>
						<td align="center"><input type="date" name="fechaf" required="required" class="datepicker"/></td>
					</tr>
					
				
					
					<tr>	
						<td colspan="2" align="center">
						<button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar
						    <i class="material-icons right">send</i>
						</button>
					</tr>
																		
					</table>
			</form>
			</div>
			</div>
								<br/><br/>

</body>
</html>
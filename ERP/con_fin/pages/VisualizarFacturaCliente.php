<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Visualizar Factura Cliente</title>
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

<h3 align="center">Visualizar Factura Cliente</h3>


<h3 align="center">Menu</h3>
		<!--center><a href='BuscarEmpleado.php'>Buscar Empleado</a>
		<a href='VisualizarPagoEmpleado.php'>Visualizar Pagos</a>
		<a href='VisualizarFacturaCliente.php'>Visualizar Factura Clientes</a></center-->
		<center><p>Ingrese el ID de La Factura.</p><br/></center> 
		
<form method="post" action="ImprimirFactura.php">
				<table class="responsive-table centered">
					<tr>
						<td>Folio Factura:</td>
						<td><input maxlength="20" type="number" name="idfactura"  placeholder="ID Factura" required="required"/></td>
					</tr>
					
					<tr>
						<td>Ingresa la Fecha de Pago:</td>
						<td><input type="date" name="fecha" required="required" class="datepicker"/></td>
					</tr>
					
				
					
					<tr>	
						<td colspan="2" align="center">
						<button class="btn waves-effect waves-light" type="submit" name="Buscar">Buscar
				    <i class="material-icons right">send</i>
				</button>
					</tr>
																		
					</table>
			</form>
								<br/><br/>

</body>
</html>
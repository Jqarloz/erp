<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Pago Proveedor</title>
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

<center><h3>Pago Proveedor</h3></center>

<div class="container">
<div class="col s6 offset-s3">
<form method="post" name="pagoprove">
	<table class="responsive-table centered">
		<tr>
			<td>Fecha de Contrato</td>
			<td><input type="date" name="fechac" class="datepicker"/></td>
		</tr>
		<tr>
			<td>Fecha de Vencimiento</td>
			<td><input type="date" name="fechav" class="datepicker"/></td>
		</tr>
		<tr>
			<td>ID Compra</td>
			<td><select name="idcompra">
				<option></option>
				<?php
				$consulta_compras=mysqli_query($conecta, "select * from compras order by idCompras;");
				while($resultados= mysqli_fetch_array($consulta_compras)){
					echo'<option value='.$resultados['idCompras'].'>'.$resultados['idCompras'].'</option>';
				}
				?>					
				</select>
			</td>
		</tr>
		<tr>
			<td>Nombre Proveedor</td>
			<td><select name="nomprove">
				<option></option>
				<?php
				$consulta_prove=mysqli_query($conecta, "select * from proveedores order by Nombre;");
				while($resultados= mysqli_fetch_array($consulta_prove)){
					echo'<option value='.$resultados['idProveedores'].'>'.$resultados['Nombre'].'</option>';
				}
				?>	
				</select>
			</td>
		</tr>
		<tr>
			<td>Total</td>
			<td><input type="number" name="total"/></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<button class="btn waves-effect waves-light" type="submit" name="Guardar">Guardar
				    <i class="material-icons right">send</i>
				</button>
			</td>
		</tr>
	</table>
	
</form>

<form method="post" name="buscarcompra">
<center><h3>Buscar Compras</h3> <h5><p> Instrucciones: Si no recuerda la informaci&oacute;n sobre la compra ingrese las fechas correspondientes de acuerdo a la realizaci&oacute;n de la compra.</p></h5></center>

	<table class="responsive-table centered">
		<tr>
			<td>Fecha de Inicio</td>
			<td><input type="date" name="fecha" class="datepicker"/></td>
		</tr>
		<tr>
			<td>Fecha de Final</td>
			<td><input type="date" name="fecha_2" class="datepicker"/></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar
				    <i class="material-icons right">send</i>
				</button>
			</td>
		</tr>
	</table>
	
	<?php
	@$SDATE = $_POST['fecha'];
	@$SDATE2 = $_POST['fecha_2'];
	$SSDATE = explode('/', $SDATE);
	@$STARTD = $SSDATE[2]."-".$SSDATE[0]."-".$SSDATE[1];


	$SSDATE2 = explode('/', $SDATE2);
	@$STARTD2 = $SSDATE2[2]."-".$SSDATE2[0]."-".$SSDATE2[1];

	if(isset($SDATE) and isset($SDATE2)){
		$consulta=mysqli_query($conecta, "select idCompras, compras.Total as TotalC, pedidopreveedor.idPedidoPreveedor, Fecha, proveedores.Nombre as NomProve, materiaprima.Nombre as NomMap, Catidad from compras inner join pedidopreveedor inner join proveedores inner join materiaprima inner join materiaprima_has_pedidopreveedor where 
compras.idPedidoPreveedor = pedidopreveedor.idPedidoPreveedor and pedidopreveedor.idProveedores = proveedores.idProveedores and materiaprima.idMateriaPrima = materiaprima_has_pedidopreveedor.idMateriaPrima and Fecha BETWEEN '$SDATE' AND '$SDATE2';");

	$nr = mysqli_num_rows($consulta);
		
		if($nr>0){
			echo "<table border='1' align='center'>";
			echo '<tr>';
			echo '<td>ID Compra</td>';
			echo '<td>Total</td>';
			echo '<td>ID Pedido Proveedor</td>';
			echo '<td>Fecha</td>';
			echo '<td>Nombre Proveedor</td>';
			echo '<td>Nombre Materia Prima</td>';
			echo '<td>Cantidad </td>';
			
			while($resultados = mysqli_fetch_array($consulta)){
				echo '<tr><td>';
				echo $resultados['idCompras'];
				echo '</td><td>';
				echo $resultados['TotalC'];
				echo '</td><td>';
				echo $resultados['idPedidoPreveedor'];
				echo '</td><td>';
				echo $resultados['Fecha'];
				echo '</td><td>';
				echo $resultados['NomProve'];
				echo '</td><td>';
				echo $resultados['NomMap'];
				echo '</td><td>';
				echo $resultados['Catidad'];
				echo '</td></tr>';
			}
			echo '</table>';
		}
		
		else{
		
		   echo '<script type="text/javascript">';
	       echo 'alert("Fecha sin Compras")';
	       echo "</script>";
		}
	}
	
	?>
</form>
</body>
</html>

<?php
	
	@$FechaC = $_POST['fechac'];
	@$FechaV = $_POST['fechav'];
	@$IdCompra = $_POST['idcompra'];
	@$NomProve = $_POST['nomprove'];
	@$Total = $_POST['total'];
	
	if(isset($Total) and isset($IdCompra) and isset($NomProve) and isset($FechaC) and isset($FechaV)){
		$insertapp=mysqli_query($conecta, "insert into pagoproveedor values(NULL, '$Total', '$IdCompra', '$NomProve', '$FechaC', '$FechaV');");
		
		//echo $Total, $IdCompra, $NomProve, $FechaC, $FechaV;
		
		if ($insertapp){
		echo '<script type="text/javascript">';
		echo 'alert("El Pago de Proveedor se inserto correctamente.")';
		echo "</script>";
		}
		
		else {
		echo '<script type="text/javascript">';
		echo 'alert("Error: No se inserto el Pago de Proveedor. Vuelva a intentarlo.")';
		echo "</script>";
		}
	}
	?>
</div>
</div>
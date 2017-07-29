
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

<?php
	$Fecha = date('Y-m-d');
?>
<div class="col s12 center"><h5> Corte de Caja </h5></div>
<div class="row">
<form name="caja" method="post" class="col s6 offset-s3">
	<table class="responsive-table centered">
	<tr>
		<td colspan="2"><b>Fecha:</b> </td>
		<td colspan="2"><input disabled value="<?php echo $Fecha ?>" name="fecha"/></td>
	</tr>

	<tr>
		<td colspan="2"><b>Cantidad inicial: ($)</b></td>
		<td colspan="2"><input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" placeholder="0.00" name="cantidad" required="required" class="validate" /></td>
	</tr>
<!-- Compras -->
	
	<tr>
		<td colspan="2"><b>Total de compras: ($)</b> </td>
		<td colspan="2"><input disabled type="number" placeholder="0.00" name="TotalCompras"/></td>
	</tr>
<!-- end Compras -->		
<!-- Ventas -->
	<?php
		$sumaventas=mysqli_query($conecta,"SELECT SUM(Total) as total FROM ventas WHERE Fecha='$Fecha';");
		$row2 = mysqli_fetch_assoc($sumaventas);
	?>
	<tr>
		<td colspan="2"><b>Total de ventas: ($)</b> </td>
		<td colspan="2"><input disabled type="number" placeholder="0.00" value="<?php echo $row2['total']; ?>" name="TotalVentas"/></td>
	</tr>
<!-- end ventas -->	
<!-- Servicios -->
	<?php
		$sumaservicio=mysqli_query($conecta,"SELECT SUM(TotalPago) as total FROM pagoservicio WHERE FechaInicio='$Fecha';") 
									or die ( "Error" . mysql_error() );
		$row = mysqli_fetch_assoc($sumaservicio);
	?>
	<tr>
		<td colspan="2"><b>Total de servicios: ($)</b> </td>
		<td colspan="2"><input disabled type="number" placeholder="0.00" value="<?php echo $row['total']; ?>" name="TotalServicios"/>  </td>
	</tr>
<!-- end Servicios -->
<!-- Ganancias -->
<?php
	$Ganancias = $row2['total'] - $row['total'];
?>
	<tr>
		<td colspan="2"><b>Ganancias del dia:</b> </td>
		<td colspan="2"><input type="number" name="Ganancia" disabled value="<?php echo $Ganancias; ?>" class="validate"/></td>
	</tr>
<!-- end Ganancias -->

	<tr>
	<td colspan="5" align="center"><input type="submit" name="Guardar" value="Guardar" class="waves-effect waves-light btn"/></td>
	</tr>
</table>
</form>
</div>



<?php
	@$cantidad=$_POST['cantidad'];
	@$GananciaFinal = $cantidad + $Ganancias;
	if(isset ($cantidad)){
		$inserta=mysqli_query($conecta,"insert into caja values(null, '$Fecha', '$cantidad','$GananciaFinal');");
		if($inserta){
			echo '<script type="text/javascript">';
		    echo 'alert("Registro exitoso.")';
		    echo "</script>";
		    echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
		}
		else{
			echo '<script type="text/javascript">';
		    echo 'alert("Lo siento el registro no se realizo.")';
		    echo "</script>";
		    echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
		}
	   }
	   mysqli_close($conecta);
	   
?>
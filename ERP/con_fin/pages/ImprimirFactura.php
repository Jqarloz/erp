<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Imprimir Factura Cliente</title>
<meta name="" content="">
</head>
<body>
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
<h3 align="center">Imprimir Factura Cliente</h3><br/><br/>

<table class="responsive-table centered">

<?php
@$IdFactura=$_POST['idfactura'];
@$Fecha=$_POST['fecha'];


if(isset ($IdFactura) and isset ($Fecha)) {
	
	
$consulta_empleado=mysqli_query($conecta,"select  facturacliente.idFacturaCliente, clientes.idClientes, clientes.Nombre, clientes.Apaterno, clientes.Amaterno, facturacliente.Fecha as FechaF, empleado.idEmpleado, empleado.Nombre as NombreEmpleado, facturacliente.idVentas from facturacliente inner join clientes inner join empleado inner join ventas where facturacliente.idFacturaCliente='$IdFactura' and facturacliente.idClientes=clientes.idClientes and facturacliente.idEmpleado=empleado.idEmpleado and  facturacliente.idVentas=ventas.idVentas and facturacliente.Fecha='$Fecha'; ");

@$numr = mysqli_num_rows($consulta_empleado);

if($numr > 0){
while($resultados=mysqli_fetch_array($consulta_empleado)){
	

	
	echo '<tr>';
	echo '<td></td>';
	echo '<td align="center" colspan="4">Restaurante EL Recuerdo</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Id Cliente:</td>';
	echo '<td>';
	echo $resultados['idClientes'];
	echo '</td>';
	echo '<td></td>';
	echo '<td>Numero Factura:</td>';
	echo '<td>';
	echo $resultados['idFacturaCliente'];
	echo '</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Nombre</td>';
	echo '<td>';
	echo $resultados['Nombre'];
	echo '</td>';
	echo '<td></td>';
	echo '<td>Fecha de Compra:</td>';
	echo '<td>';
    echo $resultados['FechaF'];
	echo '</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Apellido Paterno</td>';
	echo '<td>';
	echo $resultados['Apaterno'];
	echo '</td>';
	echo '<td></td>';
	echo '<td>Id Empleado: </td>';
	echo '<td>';
	echo $resultados['idEmpleado'];
	echo '</td>';	
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Apellido Materno</td>';
	echo '<td>';
	echo $resultados['Amaterno'];
	echo '</td>';
	echo '<td></td>';
	echo '<td>Nombre Empleado</td>';
	echo '<td>';
	echo $resultados['NombreEmpleado'];
	echo '</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td></td>';
	echo '<td>';
	
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';
	
	/**
	* 
	lineas primera seccion
	* 
	*/
	echo '<tr>';
	echo '<td colspan="5"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="5"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="5"></td>';
	echo '</tr>';
	
	
	
	

	
	echo '<tr>';
	echo '<td>Venta:</td>';
	echo '<td>';
	echo 'Ensala Rusa';
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>';
  
	echo '</td>';
	echo '</tr>';
	


	echo '<tr>';
	echo '<td>Cantidad de Platillo:</td>';
	echo '<td>';
	echo '2';
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>';
	
	echo '</td>';
	echo '</tr>';
	
	
	
	echo '<tr>';
	
	echo '<td>Precio:</td>';
	echo '<td>180</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>';
	echo '</td>';
	
	echo '</tr>';
	
	
	
	/**
	* 
	lineas segundaseccion
	* 
	*/
	echo '<tr>';
	echo '<td colspan="5"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="5"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="5"></td>';
	echo '</tr>';
	
	
	
	
	echo '<tr>';
	echo '<td>Subtotal:</td>';
	echo '<td>';

	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Impuestos::</td>';
	echo '<td>';
	
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Total:</td>';
	echo '<td>';

	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';
	
	echo '<tr>';

	echo '<td align="center" height="40" colspan="8">';

   /* echo "<a href='ReporteEmpleado.php?codemp=$resultados[idEmpleado]'>Imprimir Pago</a>";*/
    
    echo "<a href='ReporteEmpleado.php?codemp=$resultados[idFacturaCliente]'><button type='button'>Imprimir Factura</button></a>&nbsp;&nbsp;&nbsp;";
    
    
    echo "<a href='VisualizarFacturaCliente.php'><button type='button'>Cancelar</button></a>";
    

	
    echo '</td>';
   
   echo '</tr>';

	
	

 
	
	

	}
	}
	else{
		
	   echo '<script type="text/javascript">';
       echo 'alert("Pago del Empleado no encontrado")';
       echo "</script>";
       header("Refresh:0;URL=VisualizarPagoEmpleado.php");
      

	}
	
	}
	
	

?>
<!--<tr>
<td>
<input type="button"  name="Cancelar" value="Cancelar" onclick="javascript:window.location='VisualizarPagoEmpleado.php';"/>

</td>
</tr>-->


</table>

</body>
</html>
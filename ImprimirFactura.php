<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Imprimir Factura</title>
<meta name="" content="">
</head>
<body>

<!-- siempre -->
<?php include("menu.php"); ?>
<section class="ContentPage">
<div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><a href="./carritodecompras.php" title="ver carrito de compras">
		</a></figure></li>
    </div>
<!--end -->

<form name="busqueda" method="post">
<table align="center" style="width: 40%;">
<center>
<tr><td align="center" style="font-size: 30px;" colspan="4">Imprimir Factura Cliente</td></tr>
<tr><td colspan="4"><b>Nota: </b>Solo se pueden consultar facturas de compras realizadas el mismo dia.</td></tr>

<tr><td colspan="4">Buscar Factura<input type="text" name="f" required><input type="submit" value="Buscar" class="waves-effect waves-light btn"></td></tr>
</center>
<?php
@$fecha=date("Y-m-d");
@$folio=$_POST['f'];

if(isset ($folio)) {
	
	
$consulta_ventas=mysqli_query($conecta,"select * from ventas where idVentas='$folio' and Fecha='$fecha';");
$consulta_pe=mysqli_query($conecta,"select * from pedidoscliente where idVentas='$folio' and Fecha='$fecha' and 	Estado_idEstado='2';");

@$numr = mysqli_num_rows($consulta_pe);

if($numr > 0){
while($resultados=mysqli_fetch_array($consulta_ventas)){
	
	$consulta_pedido=mysqli_query($conecta,"select * from pedidoscliente where idVentas='$folio';");
	while($resultadosp=mysqli_fetch_array($consulta_pedido)){
		@$ip=$resultadosp['idPedidos'];
		@$ic=$resultadosp['idClientes'];
		@$ie=$resultadosp['idEmpleado'];
	}

	$consulta_clientes=mysqli_query($conecta,"select * from clientes where idClientes='$ic';");
	while($resultadosc=mysqli_fetch_array($consulta_clientes)){
		@$nom=$resultadosc['Nombre'];
		@$ap=$resultadosc['Apaterno'];
		@$am=$resultadosc['Amaterno'];
	}

	$consulta_empleado=mysqli_query($conecta,"select * from empleado where idEmpleado='$ie';");
	@$e = mysqli_num_rows($consulta_empleado);
	if ($e>0) {
		while($resultadose=mysqli_fetch_array($consulta_empleado)){
			@$enom=$resultadose['Nombre'];
			@$eap=$resultadose['Apaterno'];
			@$eam=$resultadose['Amaterno'];
		}
	}else{
		@$enom='';
	}
	
	echo '<tr>';
	echo '<td></td>';
	echo '<td align="center" colspan="4" style="font-size: 20px;">Restaurante EL Paraiso</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td><b>Id Cliente: </b></td>';
	echo '<td>'.$ic.'</td>';
	echo '<td><b>Numero Factura: </b></td>';
	echo '<td>';
	echo $resultados['idVentas'];
	echo '</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td><b>Nombre: </b></td>';
	echo '<td>'.$nom.'</td>';
	echo '<td><b>Fecha de Compra: </b></td>';
	echo '<td>';
    echo $resultados['Fecha'];
	echo '</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td><b>Apellido Paterno: </b></td>';
	echo '<td>'.$ap.'</td>';
	echo '<td><b>Id Empleado: </br></td>';
	echo '<td>'.$ie.'</td>';	
	echo '</tr>';
	
	echo '<tr>';
	echo '<td><b>Apellido Materno: </br></td>';
	echo '<td>'.$am.'</td>';
	echo '<td><b>Nombre Empleado: </b></td>';
	echo '<td>'.$enom.'</td>';
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
	echo '<tr><td><b>Platillo</b></td><td><b>Cantidad</b></td><td><b>Precio</b></td><td><b>Total</b></td>';
	@$consulta_platillos=mysqli_query($conecta,"select * from pedidoscliente_has_platillo where PedidosCliente_idPedidos='$ip';");
	while($resultadosp=mysqli_fetch_array($consulta_platillos)){
		@$idp=$resultadosp['idPlatillo'];
		@$consulta_pla=mysqli_query($conecta,"select * from platillo where idPlatillo='$idp';");
		while($resultadospla=mysqli_fetch_array($consulta_pla)){
			@$nomp=$resultadospla['Nombre'];
			@$precio=$resultadospla['Precio'];
		}
		echo '<tr><td>';
		echo $nomp;
		echo '</td><td>';
		echo $resultadosp['Cantidad'];
		echo '</td><td>$';
		echo $precio;
		echo '</td><td>$';
		echo $resultadosp['Total'];
		echo '</td></tr>';
	}	
	
	
	/**
	* 
	lineas segundaseccion
	* 
	*/
	@$total=$resultados['Total'];
	@$tsi=$total-(0.16*$total);
	echo '<tr>';
	echo '<td><b>Subtotal: </b>$'.$tsi.'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td><b>Impuestos: </b>16%</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td><b>Total: </b>$'.$total.'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td align="center" height="40" colspan="4">';  
    echo "<a href='javascript:window.print(); void 0;'>Imprimir</a>";
    echo '</td>';
	echo '</tr>';

	
	

 
	
	

	}
	}
	else{
		
	   echo "<center><tr><td>No hay facturas relacionadas con ese folio.</td></tr></center>";

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
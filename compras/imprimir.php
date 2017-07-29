<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	</head>
	<body>
		<header>
			<a title="ver carrito de compras"></a>
		</header>
		<form name="registro" method="post">
		<table style="margin: 0 auto;">
			<tr><td style="font-size: 30px" colspan="4" align="center">Gracias Por Su Compra</td></tr>
			<?php
				@$consulta_id=mysqli_query($conecta,"select idVentas from ventas;");
				@$nr=mysqli_num_rows($consulta_id);
				echo '<tr><td colspan="4"><b>No. Folio:</b> '.$nr.'</td></tr>';
				echo '<tr><td colspan="4"><b>Para solicitar factura requiere del numero de folio.<b></td></tr>';
			?>
			<tr>
				<td><b>Nombre</b></td>
				<td><b>Cantidad</b></td>
				<td><b>Precio</b></td>
				<td><b>Subtotal</b></td>
			</tr>
			<?php
				session_start();
				$arreglo=$_SESSION['carrito'];
				$fecha=date("Y-m-d");
				$total=0;
				for($i=0;$i<count($arreglo);$i++){
			
					echo '<tr>
					<td>'.$arreglo[$i]['nombre'].'</td>
					<td>'.$arreglo[$i]['Cantidad'].'</td>
					<td>'.$arreglo[$i]['precio'].'</td>
					<td>'.$arreglo[$i]['Cantidad'] * $arreglo[$i]['precio'].'</td>
					</tr>';
					$total=$total+($arreglo[$i]['Cantidad'] * $arreglo[$i]['precio']);			
				}
				unset($_SESSION['carrito']);
			?>
			<tr><td colspan="4" align="center">Total: $<?php echo $total; ?></td></tr>
			<tr><td colspan="4" align="center">Asegurate de imprimir o guardar este documento:</td></tr>
			<tr><td colspan="4" align="center"><a href='javascript:window.print(); void 0;'>Imprimir</a></td></tr>
			<tr></tr><tr><td colspan="4" align="center"><a href="../carrito.php">Menu</a></td></tr>
		</table>
	</body>
</html>
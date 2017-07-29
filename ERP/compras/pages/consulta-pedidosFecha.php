<html>
	<head>
	</head>
	<body>

<!-- Que nunca Falte!!! -->
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
if($_SESSION['accType']!= 40 && $_SESSION['accType'] != 100){
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Compras")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
include("../../../config.php"); 
include("components.php"); 
include("../../../conexion.php"); 
?>
<!-- ok -->
	<form name="busqueda" method="post">
	<table style="margin: 0 auto; width: 50%;">
	<tr><td colspan="3" style="font-size: 30px">Pedidos A Proveedores</td></tr>
		<tr>
			<tr><td colspan="2">Fecha Inicio:<input type="date" name="Inicio" class="datepicker"></td><td colspan="2">Fecha Final:<input type="date" name="Final" class="datepicker"></td><td><input type="submit" value="Buscar" class="waves-effect waves-light btn"/></td><td><a href="javascript:history.go(-1);" class="waves-effect waves-light btn">Atras</a></td></tr>
			<?php
				@$inicio=$_POST['Inicio'];
				@$final=$_POST['Final'];
				if(isset($inicio) and isset($final)){
					@$consulta_id=mysqli_query($conecta,"select * from pedidopreveedor where Estado_idEstado='2' and Fecha BETWEEN '$inicio' and '$final';");
					@$nr=mysqli_num_rows($consulta_id);
					if ($nr=='0') {
						echo '<tr><td>No hay registros</td></tr>';
					}else{
						echo '<tr><td colspan="3"><a href="javascript:window.print(); void 0;">Imprimir </a></td><td colspan="2">De '.$inicio.' Hasta '.$final.'</td></tr><td style="border:black 1px solid"><b>Pedido</b></td>
						<td style="border:black 1px solid"><b>Fecha</b></td>
						<td style="border:black 1px solid"><b>Proveedor</b></td>
						<td style="border:black 1px solid"><b>Mas informacion</b></td>
						<td style="border:black 1px solid"><b>Total</b></td>';
						@$consulta_viaje=mysqli_query($conecta,"select * from pedidopreveedor where Estado_idEstado='2' and Fecha BETWEEN '$inicio' and '$final';");
						while($resultados=mysqli_fetch_array($consulta_viaje)){
							@$to=$resultados['idPedidoPreveedor'];
							@$consulta_total=mysqli_query($conecta,"select * from compras where idPedidoPreveedor='$to';");
							while($resultados2=mysqli_fetch_array($consulta_total)){
								@$tol=$resultados2['Total'];
							}
							echo '<tr><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
							echo $resultados['idPedidoPreveedor'];
							echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
							echo $resultados['Fecha'];
							echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
							echo '<a href="proveedor.php? idv='.$resultados['idProveedores'].'">'.$resultados['idProveedores'].'</a>';
							echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
							echo '<a href="Verdetalles.php? idv='.$resultados['idPedidoPreveedor'].'">Ver mas</a>';
							echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
							echo $tol;
							echo '</td></tr>';
							@$Total=$Total+$tol;
						}
						echo '<tr><td colspan="3"></td><td><b>Total:</b></td><td>'.$Total.'</td></tr>';
					}
				}
			?>
		</tr>
	</table>
	</div>
	</form>
	</body>
</html>
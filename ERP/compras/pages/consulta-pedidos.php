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
	<tr><td colspan="4" style="font-size: 30px">Pedidos A Proveedores</td><td><a href="consulta-pedidosFecha.php">Hacer Una Consulta</a></td></tr>
		<tr>

			<td style="border:black 1px solid"><b>id Pedido</b></td>
			<td style="border:black 1px solid"><b>Fecha</b></td>
			<td style="border:black 1px solid"><b>Estado de compra</b></td>
			<td style="border:black 1px solid"><b>Proveedor</b></td>
			<td style="border:black 1px solid"><b>Mas informacion</b></td>
			<td style="border:black 1px solid"><b>Editar</b></td>
			<?php
				@$consulta_id=mysqli_query($conecta,"select idPedidoPreveedor from pedidopreveedor;");
				@$nr=mysqli_num_rows($consulta_id);
				if ($nr=='0') {
					echo '<tr><td colspan="2">No hay registros</td></tr>';
				}
				@$consulta_viaje=mysqli_query($conecta,"select * from pedidopreveedor;");
				while($resultados=mysqli_fetch_array($consulta_viaje)){
					@$estado=$resultados['Estado_idEstado'];
					@$consulta_estado=mysqli_query($conecta,"select Estado from estado where idEstado=$estado;");
					while($resultados1=mysqli_fetch_array($consulta_estado)){
						@$estado1=$resultados1['Estado'];
					}
					echo '<tr><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['idPedidoPreveedor'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Fecha'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $estado1;
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo '<a href="proveedor.php? idv='.$resultados['idProveedores'].'">'.$resultados['idProveedores'].'</a>';
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo '<a href="Verdetalles.php? idv='.$resultados['idPedidoPreveedor'].'">Ver mas</a>';
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo '<a href="editarpp.php? idv='.$resultados['idPedidoPreveedor'].'">Editar</a>';
					echo '</td></tr>';
				}
			?>
		</tr>
		<tr><td colspan="6"></td></tr>
		<tr><td colspan="2" style="font-size: 30px">Solicitudes</td></tr>
		<tr>
			<td style="border:black 1px solid"><b>PDF</b></td>
			<td style="border:black 1px solid"><b>Fecha</b></td>
			<td style="border:black 1px solid"><b>Estado de solicitud</b></td>
			<td style="border:black 1px solid" colspan="3"><b>Opiones</b></td>	
		</tr>
		<?php
				@$consulta_id=mysqli_query($conecta,"select ID from solicitudcompra where IDEstado=1;");
				@$nr=mysqli_num_rows($consulta_id);
				if ($nr=='0') {
					echo '<tr><td colspan="2">No hay solicitudes</td></tr>';
				}
				@$consulta_viaje=mysqli_query($conecta,"select * from solicitudcompra where IDEstado=1;");
				while($resultados=mysqli_fetch_array($consulta_viaje)){
					@$estado=$resultados['IDEstado'];
					@$consulta_estado=mysqli_query($conecta,"select Estado from estado where idEstado=$estado;");
					while($resultados1=mysqli_fetch_array($consulta_estado)){
						@$estado1=$resultados1['Estado'];
					}
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo "<a target='_blank' href='../../Inventario_Almacen/pages/".$resultados ['pdf']."'>PDF</a>";
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['fecha'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $estado1;
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid" colspan="3">';
					echo '<a href="formulario-pedidoproveedor.php? idv='.$resultados['ID'].'">Registrar Compra </a>/';
					echo '<a href="cancelarpedido.php? idv='.$resultados['ID'].'"> Cancelar Compra</a>';
					echo '</td></tr>';
				}
			?>
		<tr><td><a href="javascript:history.go(-1);" class="waves-effect waves-light btn">Atras</a></td></tr>
	</table>
	</div>
	</form>
	</body>
</html>
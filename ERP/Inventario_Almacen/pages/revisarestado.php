<html>
	<head>
	</head>
	<body>

<!-- Que nunca Falte!!! -->
<?php 
include("../../../config.php"); 
include("../components2.html"); 
include("conexion.php");

if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
if($_SESSION['accType']!= 60 ||$_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Almacen")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>

<!-- ok -->
	<form name="busqueda" method="post">
	<table style="margin: 0 auto; width: 50%;">
			<tr>

			<td style="border:black 1px solid"><b>id Pedido</b></td>
			<td style="border:black 1px solid"><b>Fecha</b></td>
			<td style="border:black 1px solid"><b>Estado de compra</b></td>
			<td style="border:black 1px solid"><b>Proveedor</b></td>
			<?php
				//include("conexion.php");
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
					echo '</td></tr>';
				}
			?>
		</tr>
	</table>
	</div>
	</form>
	</body>
</html>
<html>
	<head>
	</head>
	<body>

<!-- Que nunca Falte!!! -->
<?php 
include("../../../config.php"); 
include("../components.html"); 
include("../../../conexion.php");

if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
if($_SESSION['accType']!= 40 || $_SESSION['accType'] != 100){
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Compras")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>
<!-- ok -->
	<form name="busqueda" method="post">
	<table style="margin: 0 auto; width: 50%;">
	<tr><td colspan="3" style="font-size: 30px">Buscar</td></tr>
		<tr>
			<tr><td colspan="2">idSolicitud:<input type="text" name="id"></td><td colspan="2"><input type="submit" value="Buscar" class="waves-effect waves-light btn"/></td><td colspan="2"><a href="javascript:history.go(-1);" class="waves-effect waves-light btn">Atras</a></td></tr>
			<?php
				@$cv=$_GET['idv'];
				@$buscar=$_POST['id'];
				if(isset($buscar)){
					@$consulta_id=mysqli_query($conecta,"select * from compras where IDSolicitud='$buscar';");
					while($resultados=mysqli_fetch_array($consulta_id)){
						@$idp=$resultados['idPedidoPreveedor'];
						@$tol=$resultados['Total'];
					}
					@$nr=mysqli_num_rows($consulta_id);
					if ($nr=='0') {
						echo '<tr><td>No hay registros</td></tr>';
					}else{
						echo '<tr>
						<td style="border:black 1px solid"><b>id Pedido</b></td>
						<td style="border:black 1px solid"><b>Fecha</b></td>
						<td style="border:black 1px solid"><b>Proveedor</b></td>
						<td style="border:black 1px solid"><b>Mas informacion</b></td>
						<td style="border:black 1px solid"><b>Total</b></td>
						<td style="border:black 1px solid"><b>Cancelar</b></td></tr>';
						@$consulta_viaje=mysqli_query($conecta,"select * from pedidopreveedor where idPedidoPreveedor='$idp';");
						while($resultados=mysqli_fetch_array($consulta_viaje)){
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
							echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
							echo '<a href="cancelar.php? idv='.$resultados['idPedidoPreveedor'].' '.$cv.'">Cancelar</a>';
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
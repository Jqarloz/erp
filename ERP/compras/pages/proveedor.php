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
	<table style="margin: 0 auto; width: 40%;">
	<tr><td style="font-size: 30px">Proveedor</td></tr>
		<tr>
			<td style="border:black 1px solid"><b>idProveedor</b></td>
			<td style="border:black 1px solid"><b>Nombre</b></td>
			<td style="border:black 1px solid"><b>Producto</b></td>
			<td style="border:black 1px solid"><b>Calle</b></td>
			<td style="border:black 1px solid"><b>Numero</b></td>
			<td style="border:black 1px solid"><b>Colonia</b></td>
			<td style="border:black 1px solid"><b>Municipio</b></td>
			<td style="border:black 1px solid"><b>Estado</b></td>
			<td style="border:black 1px solid"><b>Editar</b></td>
			<?php
				@$cv=$_GET['idv'];
				@$consulta_viaje=mysqli_query($conecta,"select * from proveedores where idProveedores='$cv';");
				while($resultados=mysqli_fetch_array($consulta_viaje)){
					echo '<tr><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['idProveedores'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Nombre'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Producto'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Calle'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Numero'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Colonia'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Municipio'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo $resultados['Estado'];
					echo '</td><td WIDTH=30 ALIGN="center" style="border:black 1px solid">';
					echo '<a href="editarpr.php? idv='.$resultados['idProveedores'].'">Editar</a>';
					echo '</td></tr>';
				}
			?>
		</tr>
		<tr><td><a href="javascript:history.go(-1);" class="waves-effect waves-light btn">Atras</a></td></tr>
	</table>
	</div>
	</form>
	</body>
</html>
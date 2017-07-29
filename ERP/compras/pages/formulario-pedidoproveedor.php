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
		<form name="municipio" method="post">
		<table style="margin: 0 auto;width: 30%">
		<tr><td style="font-size: 30px">Nuevo Pedido</td></tr>
			<tr><td>Fecha:</td></tr>
			<tr>
				<td><input type="date" id="fecha" name="fecha" maxlength="25" /></td>
			</tr>
			<tr><td>Proveedor:</td></tr>
			<tr>
				<td><Select name="proveedor">
				<option></option>
				<?php
					@$r=$_GET['idv'];
					@$consulta_pro=mysqli_query($conecta,"select * from proveedores order by nombre;");
					while($resultados=mysqli_fetch_array($consulta_pro)){
						echo '<option value='.$resultados['idProveedores'].'>'.$resultados['Nombre'];
					}
				?>
			</tr>
			<tr>
				<td><b>ADVERTENCIA:</b> Antes de crear un nuevo pedido asegurate de que existen los campos correspondientes en <a href="consulta-proveedores.php" target="_blank">Proveedores</a> y <a href="consulta-materiaprima.php" target="_blank"> Materia Prima</a>.</td>
			</tr>
			<tr>
				<td align="center"><a href="javascript:history.go(-1);" style="width: 150px" class="waves-effect waves-light btn">Atras</a><input type="submit" value="Crear" class="waves-effect waves-light btn"/><td>
			</tr>
	</body>
</html>

<?php
	@$fec=$_POST['fecha'];
	@$am1=$_POST['proveedor'];
	if(isset($fec) and isset($am1)){
		$inserta=mysqli_query($conecta,"insert into pedidopreveedor values(NULL,'$fec','$am1','2');");
		if($inserta){	
			@$consulta_id=mysqli_query($conecta,"select idPedidoPreveedor from pedidopreveedor;");
			@$nr=mysqli_num_rows($consulta_id);
			mysqli_query($conecta,"insert into Compras values(NULL,'0','$nr','$r');");
			mysqli_query($conecta,"Update solicitudcompra set IDEstado='2' where ID='$r';");
			print '<script language="JavaScript">'; 
			print 'alert("Pedido creado");';
			print '</script>';
			header("Refresh:0.0; URL=registro_productosproveedor.php");
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Pedido no creado");';
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
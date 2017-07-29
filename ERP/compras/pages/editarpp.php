<html>
	<head>
		<meta charset="utf-8">
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
		<form name="Viajero"  method="post"> 
	<table style="margin: 0 auto; width: 400px;">
		<?php
			@$r=$_GET['idv'];
			@$consulta_viajero=mysqli_query($conecta,"select * from pedidopreveedor where idPedidoPreveedor='$r';");
			while($resultados=mysqli_fetch_array($consulta_viajero)){
				@$cv=$resultados['Fecha'];
			}
		?>
		<tr><td style="font-size: 30px">Editar Pedido</td></tr>
		<tr><td>Fecha: </td></tr>
		<tr><td><input type="text" name="cv1" value="<?php echo $cv; ?>" /></td></tr>
		<tr><td>Estado: </td></tr>
		<tr>
			<td><Select name="tipo">
			<option></option>
			<?php
				@$consulta_pr=mysqli_query($conecta,"select * from estado order by Estado;");
				while($resultados=mysqli_fetch_array($consulta_pr)){
					echo '<option value='.$resultados['idEstado'].'>'.$resultados['Estado'];
				}
			?></tr>
		<tr><td colspan="2" align="center"><input type="submit" value="Actualizar" class="waves-effect waves-light btn"/></td></tr>
	</table>
	</form>
	</body>
	</html>

<?php
	@$NomV=$_POST['cv1'];
	@$ap1=$_POST['tipo'];
	if(isset($NomV)){
		$inserta=mysqli_query($conecta,"Update pedidopreveedor set Fecha='$NomV', Estado_idEstado='$ap1' where idPedidoPreveedor='$r';");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Datos actualizados");'; 
			print '</script>';
			header("Refresh:0.2; URL=consulta-pedidos.php");
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Datos no actualizados");'; 
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
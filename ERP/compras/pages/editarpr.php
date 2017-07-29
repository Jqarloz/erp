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
	<table  style="margin: 0 auto; width: 30%;">
		<?php
			@$r=$_GET['idv'];
			@$consulta_viajero=mysqli_query($conecta,"select * from proveedores where idProveedores='$r';");
			while($resultados=mysqli_fetch_array($consulta_viajero)){
				@$nom=$resultados['Nombre'];
				@$pro=$resultados['Producto'];
				@$call=$resultados['Calle'];
				@$num=$resultados['Numero'];
				@$col=$resultados['Colonia'];
				@$mun=$resultados['Municipio'];
				@$est=$resultados['Estado'];
			}
		?>
		<tr><td style="font-size: 30px">Editar Proveedor</td></tr>
		<tr><td>Nombre: </td></tr>
		<tr><td><input type="text" name="nom1" value="<?php echo $nom; ?>" /></td></tr>
		<tr><td>Producto: </td></tr>
		<tr><td><input type="text" name="pro1" value="<?php echo $pro; ?>" /></td></tr>
		<tr><td>Calle:</td></tr>
		<tr><td><input type="text" name="call1" value="<?php echo $call; ?>" /></td></tr>
		<tr><td>Numero:</td></tr>
		<tr><td><input type="number" name="num1" value="<?php echo $num; ?>" /></td></tr>
		<tr><td>Colonia:</td></tr>
		<tr><td><input type="text" name="col1" value="<?php echo $col; ?>" /></td></tr>
		<tr><td>Municipio:</td></tr>
		<tr><td><input type="text" name="mun1" value="<?php echo $mun; ?>" /></td></tr>
		<tr><td>Estado:</td></tr>
		<tr><td><input type="text" name="est1" value="<?php echo $est; ?>" /></td></tr>
		<tr><td colspan="2" align="center"><a href="javascript:history.go(-1);" style="width: 180px;" class="waves-effect waves-light btn">Atras</a><input type="submit" value="Actualizar" class="waves-effect waves-light btn"/></td></tr>
	</table>
	</form>
	</body>
	</html>

<?php
	@$nombre=$_POST['nom1'];
	@$producto=$_POST['pro1'];
	@$calle=$_POST['call1'];
	@$numero=$_POST['num1'];
	@$colonia=$_POST['col1'];
	@$municipio=$_POST['mun1'];
	@$estado=$_POST['est1'];
	if(isset($nombre) and isset($producto) and isset($calle) and isset($numero) and isset($municipio) and isset($estado)){
		$inserta=mysqli_query($conecta,"Update proveedores set Nombre='$nombre', Producto='$producto',Numero='$numero',Colonia='$colonia',Municipio='$municipio',Estado='$estado', Calle='$calle' where idProveedores='$r';");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Datos actualizados");'; 
			print '</script>';
			header("Refresh:0.1; URL=consulta-proveedores.php");
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Datos no actualizados");'; 
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
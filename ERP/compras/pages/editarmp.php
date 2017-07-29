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
	<table style="margin: 0 auto; width: 30%;">
		<?php
			@$r=$_GET['idv'];
			@$consulta_viajero=mysqli_query($conecta,"select * from materiaprima where idMateriaPrima='$r';");
			while($resultados=mysqli_fetch_array($consulta_viajero)){
				@$n=$resultados['Nombre'];
				@$n2=$resultados['Categoria'];
				@$n3=$resultados['Unidad'];
			}
		?>
		<tr><td style="font-size: 30px">Editar Materia Prima</td></tr>
		<tr><td>Nombre: </td></tr>
		<tr><td><input type="text" name="cv1" value="<?php echo $n; ?>" /></td></tr>
		<tr><td>Categoria: </td></tr>
		<tr><td><input type="text" name="N1" value="<?php echo $n2; ?>" /></td></tr>
		<tr><td>Unidad: </td></tr>
		<tr><td><input type="text" name="N2" value="<?php echo $n3; ?>" /></td></tr>
		<tr><td colspan="2" align="center"><a href="javascript:history.go(-1);" style="width: 180px;" class="waves-effect waves-light btn">Atras</a><input type="submit" value="Actualizar" class="waves-effect waves-light btn"/></td></tr>
	</table>
	</form>
	</body>
	</html>

<?php
	@$NomV=$_POST['cv1'];
	@$a1=$_POST['N1'];
	@$a2=$_POST['N2'];
	if(isset($NomV) and isset($a1) and isset($a2)){
		$inserta=mysqli_query($conecta,"Update materiaprima set Nombre='$NomV', Categoria='$a1', Unidad='$a2'  where idMateriaPrima='$r';");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Datos actualizados");'; 
			print '</script>';
			header("Refresh:0.2; URL=consulta-materiaprima.php");
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Datos no actualizados");'; 
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
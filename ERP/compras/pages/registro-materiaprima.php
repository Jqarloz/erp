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
		<form name="municipio" method="post">
		<table style="margin: 0 auto; width: 30%">
			<tr align="center"><td colspan="2" style="font-size: 30px;">Agregar Materia Prima</td></tr>
			<tr><td>Nombre:</td></tr>
			<tr>
				<td><input type="text" id="nombre" name="nombre" maxlength="25" /></td>
			</tr>
			<tr><td>Categoria:</td></tr>
			<tr>
				<td><input type="text" id="Producto" name="Producto" maxlength="25" /></td>
			</tr>
			<tr><td>Unidad:</td></tr>
			<tr>
				<td><input type="text" id="Calle" name="Calle" maxlength="25" /></td>
			</tr>
			<tr>
				<td align="center"><a href="javascript:history.go(-1);" style="width: 180px;" class="waves-effect waves-light btn">Atras</a><input type="submit" value="Guardar" class="waves-effect waves-light btn"/><td>
			</tr>
	</body>
</html>

<?php
	@$nom=$_POST['nombre'];
	@$ap1=$_POST['Producto'];
	@$am1=$_POST['Calle'];
	if(isset($nom) and isset($ap1) and isset($am1)){
		$inserta=mysqli_query($conecta,"insert into materiaprima values(NULL,'$nom','$ap1','$am1');");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Dato agregado correctamente");'; 
			print '</script>';
			header("Refresh:0.1; URL=consulta-materiaprima.php");
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Dato no agregado");'; 
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
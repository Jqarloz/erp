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
		<table style="margin: 0 auto; width: 30%;">
			<tr><td style="font-size: 30px">Proveedores</td></tr>
			<tr><td>Nombre:</td></tr>
			<tr>
				<td><input type="text" id="nombre" name="nombre" maxlength="25" /></td>
			</tr>
			<tr><td>Producto:</td></tr>
			<tr>
				<td><input type="text" id="precio" name="producto" maxlength="25" /></td>
			</tr>
			<tr><td>Calle:</td></tr>
			<tr>
				<td><input type="text" id="precio" name="calle" maxlength="25" /></td>
			</tr>
			<tr><td>Numero:</td></tr>
			<tr>
				<td><input type="number" id="precio" name="numero" maxlength="25" /></td>
			</tr>
			<tr><td>Colonia:</td></tr>
			<tr>
				<td><input type="text" id="precio" name="colonia" maxlength="25" /></td>
			</tr>
			<tr><td>Municipio:</td></tr>
			<tr>
				<td><input type="text" id="precio" name="municipio" maxlength="25" /></td>
			</tr>
			<tr><td>Estado:</td></tr>
			<tr>
				<td><input type="text" id="precio" name="estado" maxlength="25" /></td>
			</tr>
			<tr>
				<td align="center"><a href="javascript:history.go(-1);" style="width: 180px;" class="waves-effect waves-light btn">Atras</a><input type="submit" value="Registrar" class="waves-effect waves-light btn"/><td>
			</tr>
	</body>
</html>

<?php
	@$n=$_POST['nombre'];
	@$pro=$_POST['producto'];
	@$call=$_POST['calle'];
	@$num=$_POST['numero'];
	@$col=$_POST['colonia'];
	@$mun=$_POST['municipio'];
	@$est=$_POST['estado'];
	if(isset($n) and isset($pro) and isset($call) and isset($num) and isset($col) and isset($mun) and isset($est)){
		$inserta=mysqli_query($conecta,"insert into proveedores values(NULL,'$n','$pro','$call','$num','$col','$mun','$est');");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Proveedor agregado");';
			print '</script>';
			echo '<meta http-equiv="Refresh" content="0;URL=consulta-proveedores.php">';
		}
		else{
			print '<script language="JavaScript">';
			print 'alert("Proveedor no agregado");';
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
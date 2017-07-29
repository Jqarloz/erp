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
		<form name="municipio" method="post" enctype="multipart/form-data">
		<table style="margin: 0 auto; width: 30%;">
			<tr><td style="font-size: 30px">Agregar Platillos</td></tr>
			<tr><td>Nombre:</td></tr>
			<tr>
				<td><input type="text" id="nombre" name="nombre" maxlength="25" /></td>
			</tr>
			<tr><td>Precio:</td></tr>
			<tr>
				<td><input type="text" id="precio" name="precio" maxlength="25" /></td>
			</tr>
			<tr><td>Tipo: <a href="formulario-tipo.php">Agregar Nuevo Tipo</a></td></tr>
			<tr>
				<td><Select name="tipo">
				<option></option>
				<?php
					@$consulta_pr=mysqli_query($conecta,"select * from Tipo order by Tipo;");
					while($resultados=mysqli_fetch_array($consulta_pr)){
						echo '<option value='.$resultados['idtipo'].'>'.$resultados['Tipo'];
					}
				?>
			</tr>
			<tr><td>Ocultar o mostrar en el menu principal:</td></tr>
			<tr>
				<td><Select name="accion">
				<option></option>
				<?php
					@$consulta_pro=mysqli_query($conecta,"select * from Accion order by Accion;");
					while($resultados=mysqli_fetch_array($consulta_pro)){
						echo '<option value='.$resultados['idAccion'].'>'.$resultados['Accion'];
					}
				?>
			</tr>
			<tr><td align="right">Foto: </td></tr>
			<tr><td><input type="file" name="imagen" /></td></tr>
			<tr>
				<td align="center"><a href="javascript:history.go(-1);" style="width: 180px;" class="waves-effect waves-light btn">Atras</a><input type="submit" value="Registrar" class="waves-effect waves-light btn"/><td>
			</tr>
	</body>
</html>

<?php
	@$n=$_POST['nombre'];
	@$nom=$_POST['precio'];
	@$ap1=$_POST['tipo'];
	@$am1=$_POST['accion'];

	@$foto=$_FILES['imagen']['name'];
	@$origen=$_FILES['imagen']['tmp_name'];
	@$destino="Productos/".$foto;
	@$destino2="Productos/".$foto;
	@copy($origen,$destino);

	if(isset($nom) and isset($ap1) and isset($am1) and isset($destino2)){
		$inserta=mysqli_query($conecta,"insert into platillo values(NULL,'$n','$nom','$ap1','$am1','$destino2');");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Producto agregado");';
			print '</script>';
			header("Refresh:0.2; URL=consulta-platillos.php");
		}
		else{
			print '<script language="JavaScript">';
			print 'alert("Producto no agregado");';
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
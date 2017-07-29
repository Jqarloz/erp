<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clientes</title>
</head>

<body>

<form name="inicio" method="post">
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
if($_SESSION['accType']!= 20 && $_SESSION['accType']!= 100 ){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo CRM")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>

<!-- ok -->
<div class="row">
<form class="col s10 offset-s1">
	<table class="responsive-table">
	
	<tr>
		<td>Usuario:</td>
		<td><input id="usuario" name="usuario" type="text" class="validate" required="required"></td>
	</tr>
	
	<tr>
		<td>Contrase&ntilde;a:</td>
		<td><input id="password" name="password" type="password" class="validate" required="required"></td>
	</tr>
	
	<tr>
		<td>Confirma contrase&ntilde;a:</td>
		<td><input id="password2" name="password2" type="password" class="validate" required="required"></td>
	</tr>
	
	<tr>
		<td>Foto de perfil:</td>
		<td><input type="file" id="img" name="img" accept="image/*"></td>
	</tr>
	
	<tr>
		<td>Nombre:</td>
		<td><input tipe="text" name="nombre" pattern="[A-Z-a-z-áéíóú\s]+" required="required" value=""/></td>
	</tr>
	
	<tr>
		<td>Apellido Paterno:</td>
		<td><input tipe="text" name="apellidop" pattern="[A-Z-a-z-áéíóú\s]+" required="required" value=""/></td>
	</tr>
	
	<tr>
		<td>Apellido Materno:</td>
		<td><input tipe="text" name="apellidom" pattern="[A-Z-a-z-áéíóú\s]+" required="required" value=""/></td>
	</tr>	
	<tr>
		<td>Telefono:</td>
		<td><input tipe="number" name="telefono" required="required" value=""/></td>
	</tr>
	<tr>
		<td>Calle:</td>
		<td><input tipe="text" name="calle" pattern="[A-Z-a-z-áéíóú\s]+" required="required" value=""/></td>
	</tr>
	<tr>
		<td>N&uacute;mero:</td>
		<td><input tipe="number" name="numero" required="required" value=""/></td>
	</tr>
	<tr>
		<td>CP:</td>
		<td><input tipe="number" name="cp" required="required" value=""/></td>
	</tr>
	<tr>
		<td>Correo:</td>
		<td><input tipe="varchar" name="correo" required="required" value=""/></td>
	</tr>
	<tr>
		<td>RFC:</td>
		<td><input tipe="text" name="rfc" required="required" value=""/></td>
	</tr>	
	<tr>
		<td colspan="2" align="center"><input type="submit" name="Guardar" value="Registrar"/>
		<input type="button" value="Regresar" onclick="javascript:window.location='../index.php';"/>
		</td>
	</tr>
	
</table>

</form>
</div>
</form>			
</body>
</html>

<?php
	
	@$nomfoto=$_FILES['img']['name'];
	@$origen=$_FILES['img']['tmp_name'];
	@$destino= "../../../assets/perfil/".$nomfoto;
	copy($origen, $destino);

	@$usuario = $_POST['usuario'];
	@$password = $_POST['password'];
	@$password2 = $_POST['password2'];
	@$nom=$_POST['nombre'];
	@$ap=$_POST['apellidop'];
	@$am=$_POST['apellidom'];
	@$tel=$_POST['telefono'];
	@$calle=$_POST['calle'];
	@$num=$_POST['numero'];
	@$cp=$_POST['cp'];
	@$corr=$_POST['correo'];	
	@$rfc=$_POST['rfc'];
	
	
		if ($password == $password2) {
		$pass = sha1($password);
		if (isset($usuario) and isset($pass) and isset($nombre) and isset($ap) and isset($am) and isset($tel) and isset($calle) and isset($num) and isset($cp) and isset($mail) and isset($rfc) and isset($nomfoto)) {

			$inserta = mysqli_query($conecta, "insert into clientes values(NULL, '$usuario', '$pass', 0,'$nombre','$ap','$am','$destino','$tel','$calle','$num','$cp','$mail','$rfc');");
	
			if($inserta){
			echo 'Registro Exitoso';
			}
			
			else{
				 echo 'Registro Erroneo datos incorrectos.';
				}	
			}
	}else{
        echo 'contraseña no coincide! intente nuevamente.'; 
	}
?>
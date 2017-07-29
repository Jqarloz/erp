<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DATOS DE LOS CLIENTES</title>
</head>
<body>
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
if($_SESSION['accType']!= 20 && $_SESSION['accType']!= 100 ){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo CRM")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
include("../../../config.php"); 
include("components.php"); 
include("../../../conexion.php");
?>

	<form name="inicio" method="post">
	<div class="row">
	<form class="col s10 offset-s1">
	<h5 align="center">Lista de clientes.</h5>
		<table class="responsive-table striped centered">
			<tr>
				<td><strong>Nombre del Cliente</strong>:</td>
				<td><strong>Apelldo Paterno</strong>:</td>
				<td><strong>Apellido Materno</strong>:</td>
				<td><strong>Telefono</strong>:</td>
				<td><strong>Calle</strong>:</td>
				<td><strong>Numero</strong>:</td>
				<td><strong>CP</strong>:</td>
				<td><strong>Correo Electronico</strong>:</td>
				<td><strong>RFC</strong>:</td>				
				
			</tr>
			
					<?php
						
						$consulta_clientes=mysqli_query($conecta,"select Nombre,Apaterno,Amaterno,telefono,Calle,Numero,CP,Email,RFC from Clientes");
						
						while($resultados=mysqli_fetch_array($consulta_clientes))
						{
							echo"<tr><td>".$resultados['Nombre']."</td>";
							echo"<td>".$resultados['Apaterno']."</td>";
							echo"<td>".$resultados['Amaterno']."</td>";
							echo"<td>".$resultados['telefono']."</td>";
							echo"<td>".$resultados['Calle']."</td>";
							echo"<td>".$resultados['Numero']."</td>";
							echo"<td>".$resultados['CP']."</td>";
							echo"<td>".$resultados['Email']."</td>";
							echo"<td>".$resultados['RFC']."</td></tr>";							
						}
					?>
				
	</tr>
	<tr align="center">
	           <td  align="center" colspan="9"><input type="button" value="Regresar" onclick="javascript:window.location='../index.php';"/>
		     </td>
	</tr>
		
	</table>	
	</form>
	</div>
	</form>
</body>
</html>

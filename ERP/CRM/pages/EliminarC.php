<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/boton.css" />

<title>Eliminar Cliente</title>
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
if($_SESSION['accType']!= 20 && $_SESSION['accType']!= 100 ){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo CRM")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>
<!-- ok -->

<form name="Eliminar" method="post">

<div class="row">
<form class="col s10 offset-s1">
	<table class="responsive-table">
	
	<?php
		
   		$cc=$_GET['id'];
		$conecta_b=mysqli_query($conexion,"select * from clientes where idClientes='$cc';");
		while($resultados=mysqli_fetch_array($conecta_b)){
			$cc=$resultados['idClientes'];
			$Nombre=$resultados['Nombre'];
			$Apaterno=$resultados['Apaterno'];
			$Amaterno=$resultados['Amaterno'];
			$telefono=$resultados['telefono'];
			$Calle=$resultados['Calle'];
			$Numero=$resultados['Numero'];
			$CP=$resultados['CP'];
			$Email=$resultados['Email'];
			$RFC=$resultados['RFC'];
		}
	?>
     <tr align="center">
  	<td>Código del cliente:</td>
  	 <td> <input type="number" name="cc" value="<?php echo @$cc;?>" hidden="hidden"/></td>
	</td>
	
  	<tr align="center">
  	<td>Nombre del Cliente</td>
  	<td><input type="text" name="Nombre" value="<?php echo @$Nombre;?>" readonly="readonly"'/></td>
	</td>
  	</tr>
  	<tr align="center">
  	<td>Apellido Paterno</td>
  	<td><input type="text" name="Apaterno" value="<?php echo @$Apaterno;?>" readonly="readonly"'/></td>
	</td>
  	</tr>

  	<tr align="center">
  	<td>Apellido Materno</td>
  	<td><input type="text" name="Amaterno" value="<?php echo @$Amaterno;?>" readonly="readonly"'/></td>
	</td>
  	</tr>
    
    <tr align="center">
  	<td>Telefono</td>
  	<td><input type="number" name="telefono" value="<?php echo @$telefono;?>" readonly="readonly"'/></td>
	</td>
  	</tr>

  	<tr align="center">
  	<td>Calle</td>
  	<td><input type="text" name="Calle" value="<?php echo @$Calle;?>" readonly="readonly"/></td>
	</td>
  	</tr>

	<tr align="center">
  	<td>Numero</td>
  	<td><input type="number" name="Numero" value="<?php echo @$Numero;?>" readonly="readonly"/></td>
	</td>
  	</tr>

  	<tr align="center">
  	<td>Codigo Postal</td>
  	<td><input type="text" name="CP" value="<?php echo @$CP;?>" readonly="readonly"/></td>
	</td>
  	</tr>

	<tr align="center">
  	<td>E-mail</td>
  	<td><input type="text" name="Email" value="<?php echo @$Email;?>" readonly="readonly"/></td>
	</td>
  	</tr>

  	<tr align="center">
  	<td>RFC</td>
  	<td><input type="text" name="RFC" value="<?php echo @$RFC;?>" readonly="readonly"/></td>
	</td>
	
  	<tr>	
		<td colspan="2"><div align="center">
		  <div align="center"><?php echo "¿Desea eliminar el registro de ".@$Nombre."?";?>
		    <input type="submit" name="SI" value="SI"/>
		   <input type="button" value="Regresar" onClick="javascript:window.location='verC.php';"/>
      </div></td>
      </div></td>
    </tr>	
	
    </table>
</form>
</div>
</form>
</body>
</html>

<?php
	
	@$cc=$_POST['cc'];
	@$Nombre=$_POST['Nombre'];
	@$Apaterno=$_POST['Apaterno'];
	@$Amaterno=$_POST['Amaterno'];
	@$telefono=$_POST['telefono'];
	@$Calle=$_POST['Calle'];
	@$Numero=$_POST['Numero'];
	@$CP=$_POST['CP'];
	@$Email=$_POST['Email'];
	@$RFC=$_POST['RFC'];

 
	
	if(isset($cc) and isset($Nombre)  and isset($Apaterno) and isset($Amaterno) and isset($telefono) and isset($Calle) and isset($Numero) and isset($CP) and isset($Email) and isset($RFC))
	   {
 $e=mysqli_query($conexion, "delete from clientes where idClientes='$cc';");
		    if($e)
		     {
		      echo 'Dato Eliminado';
			  echo '<meta http-equiv="Refresh" content="0.5;URL=verC.php">';	
			  
		     }
		    else
		     {
			 echo 'Dato no eliminado';
		     }
	   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/css; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/boton.css" />
<title>Ver Clientes </title>
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

<form name="Datos" method="post">

<form name="Datos" method="post">
<div class="row">
<form class="col s10 offset-s1">
<h5 align="center"> Clientes</h5>

Nombre del cliente:
<input type="text" name="busca"/>
     	 
	<tr> <td colspan="2"><div align="center"></div></td> </tr>
	 <input type="submit" name="Buscar" value="Buscar"/>
	 <input name="button" type="button" onclick="javascript:window.location='../index.php';" value="Regresar"/>
	
	 
</form>
 </div>
 </form>
</body>
</html>
 <?php
 
  @$busca=$_POST['busca'];
  if(isset($busca)){
  $conecta_b=mysqli_query($conexion,"select * from clientes where Nombre like ('%$busca%')");
	$nr=mysqli_num_rows($conecta_b);
  	if($nr>0){

		echo '<div class="table-container"> <table border="1"> <tr><th> Nombre del cliente</th> <th>Telefono</th><th>Dirección</th>  <th> E-mail</th> <th>RFC</th> <th> </th> <th></th> </tr>';
  }
  else{
	  echo "No se hallaron resultados";
  }

 while($resultados=mysqli_fetch_array($conecta_b)){
	  echo '<tr><td>';
	  echo $resultados['Nombre'];
      echo ' ';
	  echo $resultados['Apaterno'];
	  echo ' ';
	  echo $resultados['Amaterno'];
	  echo '</td>';	

	  echo '<td>';
	  echo $resultados['telefono'];
	  echo '</td>';	
	  
	  echo '<td>';
	  echo $resultados['Calle'];
      echo ' ';
	  echo $resultados['Numero'];
	  echo ' ';
	  echo $resultados['CP'];
	  echo '</td>';	

	  echo '<td>';
	  echo $resultados['Email'];
	  echo '</td>';	

	  echo '<td>';
	  echo $resultados['RFC'];
	  echo '</td>';	
	  
	  echo '<td>';
	  echo "<a href='ActualizaC.php?id=$resultados[idClientes]'> <input type='button' name='button' value='Actualizar'> </a>";
	  
	  	
	  echo '</td>';

	  echo '<td>';
	  echo "<a href='EliminarC.php?id=$resultados[idClientes]'><input type='button' name='button' value='Eliminar'> </a>";	
	  echo '</td></tr>';
  }
  echo '</table> </div>';
}
 ?>
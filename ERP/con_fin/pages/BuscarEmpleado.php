<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Buscar Empleado</title>
<meta name="" content="">
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

if($_SESSION['accType']!= 10 && $_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo contabilidad y finanzas")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}
include("../../../config.php"); 
include("components.php"); 
include("../../../conexion.php");  
?>

 <h3 align="center">Realizar Pago Empleado</h3>
 

	
	
      		<div class="container">
      		<div class="col s6 offset-s3">
			<form method="post">
				<table class="responsive-table centered" cellpadding="5" cellspacing="5">
					<tr>
						<td>Nombre Empleado:</td>
						<td><input type="text" name="nombreE" placeholder="Nombre Empleado" required="required"/></td>
					</tr>
					<tr>	
						<td colspan="2" align="center">
						<button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar
						    <i class="material-icons right">send</i>
						</button>
					</tr>
																		
					</table>
			</form>
			</div>
			</div>
								<br/><br/>


<form method="post" name="buscar">

<?php

@$NombreE=$_POST['nombreE'];


if(isset($NombreE)) {
	
$consulta_empleado=mysqli_query($conecta,"select empleado.idEmpleado, empleado.Nombre, Apaterno, Amaterno from empleado where empleado.Nombre='$NombreE'; ");

@$numr = mysqli_num_rows($consulta_empleado);

if($numr > 0){
while($resultados=mysqli_fetch_array($consulta_empleado)){
	
	
	echo '<table class="responsive-table centered">';
	
	echo '<thead><tr>';
	echo '<th>Id Empleado</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Realizar pago</th>';
	
	echo '</tr></thead>'; 
	echo '<tbody><tr><td>';
	echo $resultados['idEmpleado'];
	echo '</td>';
	echo '<td>';
	echo $resultados['Nombre'];
	echo '</td>';
	echo '<td>';
	echo $resultados['Apaterno'];
	echo '</td>';
	echo '<td>';
	echo $resultados['Amaterno'];
	echo '</td>';
	echo '<td>';
	echo "<a href='RealizarPagoE.php?codemp=$resultados[idEmpleado]'>Realizar Pago</a>";
	echo '</td></tr></tbody>';
	

	
	echo '</table>';

	}
	}
	else{
		
	   echo '<script type="text/javascript">';
       echo 'alert("Empleado no encontrado")';
       echo "</script>";
      

	}
	
	}
	
	

?>
</form>

</body>
</html>

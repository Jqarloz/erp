<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Buscar Empleado</title>
<meta name="" content="">
</head>
<body>

 <h3 align="center">Realizar Pago Empleado</h3>
 

	
	
      
			<form method="post">
				<table border="1" align="center" cellpadding="5" cellspacing="5">
					<tr>
						<td>Nombre Empleado:</td>
						<td><input type="text" name="nombreE" placeholder="Nombre Empleado" required="required"/></td>
					</tr>
					<tr>	
						<td colspan="2" align="center">
						<input type="submit" name="buscar" value="Buscar"/></td>
					</tr>
																		
					</table>
			</form>
								<br/><br/>


<form method="post" name="buscar">

<?php

include("conexion.php");

@$NombreE=$_POST['nombreE'];


if(isset($NombreE)) {
	
$consulta_empleado=mysqli_query($conecta,"select empleado.idEmpleado, empleado.Nombre, Apaterno, Amaterno from empleado where empleado.Nombre='$NombreE'; ");

@$numr = mysqli_num_rows($consulta_empleado);

if($numr > 0){
while($resultados=mysqli_fetch_array($consulta_empleado)){
	
	
	echo '<table align="center" border="1" cellpadding="5" cellspacing="5">';
	
	echo '<tr>';
	echo '<td>Id Empleado</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Realizar pago</td>';
	
	echo '<tr>'; 
	echo '<td>';
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
	echo '</td>';
	

	
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

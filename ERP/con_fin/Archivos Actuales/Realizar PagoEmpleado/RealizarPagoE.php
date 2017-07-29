<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Realizar Pago Empleado</title>
<meta name="" content="">
</head>
<body>
<h3 align="center">Realizar Pago Empleado</h3>
<form name="pagoempleado" method="post">
<table align="center" border="1" cellpadding="5" cellspacing="5">




<?php
include("conexion.php");
@$CodE=$_GET['codemp'];


$consulta_empleado=mysqli_query($conecta,"select idEmpleado, No_Seguro, empleado.Nombre as NomE, APaterno, AMaterno, area.Nombre as NomA from empleado inner join area where idEmpleado='$CodE' and empleado.idArea=area.idArea; ");

	while($resultados=mysqli_fetch_array($consulta_empleado)){
		
	
	
	echo '<tr>';
	echo '<td align="center" colspan="2">Informacion Empleado</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Id Empleado</td>';
	echo '<td>';
	echo $resultados['idEmpleado'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Numero Seguro</td>';
	echo '<td>';
	echo $resultados['No_Seguro'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Area:</td>';
	echo '<td>';
	echo $resultados['NomA'];
	echo '</td>';
	echo '</tr>';
	
	
	
	echo '<tr>';
	echo '<td>Nombre</td>';
	echo '<td>';
	echo $resultados['NomE'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Apellido Paterno</td>';
	echo '<td>';
	echo $resultados['APaterno'];
	echo '</td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Apellido Materno</td>';
	echo '<td>';
	echo $resultados['AMaterno'];
	echo '</td>';
	echo '</tr>';
	
	}
	
?>
	
	
<?php
@$CodEpr=$_GET['codemp'];

$consulta_empleadopr=mysqli_query($conecta," select SalarioDiario, SalarioBase from prenomina where prenomina.idEmpleado='$CodEpr'; ");

	while($resultados=mysqli_fetch_array($consulta_empleadopr)){
		
	echo '<tr>';
	echo '<td align="center" colspan="2">Periodo De Pago</td>';
	echo '</tr>';
	echo '<tr>';

	echo '<td>Fecha Inicial: </td>';
	echo '<td><input type="date" name="fechai" required="required"/></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Fecha Final: </td>';
	echo '<td><input type="date" name="fechaf" required="required"/></td>';
	echo '</tr>';


	echo '<tr>';
	echo '<td>Salario Base:</td>';
	echo '<td>';
	echo $resultados['SalarioBase'];
	echo '</td>';
	echo '</tr>';


	echo '<tr>';
	echo '<td>Salario Diario:</td>';
	echo '<td>';
	echo $resultados['SalarioDiario'];
	echo '</td>';
	echo '</tr>';

	

}


?>

<tr>

<td align="center" colspan="2"><input type="submit"  name="RealizarP" value="Realizar Pago"/>
<input type="button"  name="Cancelar" value="Cancelar" onclick="javascript:window.location='BuscarEmpleado.php';"/>
</td>
</tr>

</table>
</form>


</body>
</html>

<?php
include("conexion.php");

@$FechaI = $_POST ['fechai'];
@$FechaF = $_POST ['fechaf'];
@$CodE=$_GET['codemp'];


if(isset($FechaI)and isset ($FechaF) and isset($CodE) ) {
	
	$verificarP = mysqli_query ($conecta, "select * from pagoempleado where idEmpleado='$CodE' and FechaInicial='$FechaI' and  FechaFinal");

		$r = mysqli_num_rows($verificarP);

		
			if($r>=1 ){
				
			echo '<script type="text/javascript">';
			echo 'alert("El Pago ya realizado anteriormente.")';
			echo "</script>";
			header("Refresh:0;URL=BuscarEmpleado.php");
				
				
				
			}
			else{
			
				$insertaPago = mysqli_query ($conecta, "insert into pagoempleado values(NULL,'$FechaI', '$FechaF', '$CodE'); " );
	
	
	
			if ($insertaPago){
				echo '<script type="text/javascript">';
				echo 'alert("El Pago se realizo correctamente.")';
				echo "</script>";
				header("Refresh:0;URL=BuscarEmpleado.php");
	
		
			}
	
			else {
				echo '<script type="text/javascript">';
				echo 'alert("El Pago no se realizo correctamente.")';
				echo "</script>";
				header("Refresh:0;URL=BuscarEmpleado.php");
			}
			
		}
		
}


mysqli_close($conecta);

?>
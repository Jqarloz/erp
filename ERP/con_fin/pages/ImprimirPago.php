<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Imprimir Pago Empleado</title>
<meta name="" content="">
</head>
<body>

<h2 align="center">N&oacute;mina Empleado</h2><br/><br/>


<table align="center" border="0" width="550">
	<tr>
		<td bgcolor="#d5d5d5" height="10">  </td>
		
	</tr>
</table>

<h3 align="center"><i>Restaurante El Recuerdo</i></h3>

<table align="center" border="0" width="550">
	<tr>
		<td bgcolor="#d5d5d5" height="10">  </td>
	</tr>
	
	
</table>

<table align="center" border="0" width="550" >
	
	<tr>
		<td>Direcci&oacute;n: Avenida San Felipe 2615-A<br/>Colonia Villa Posadas, CP 72060 Puebla,<br/>Pue.Mex.</td>
		<td width="250">  </td>
	</tr>
	<tr>
		<td>Tel&eacute;fonos: (222) 4 13 51 / (222) 2 31 60 38</td>
		<td width="250">  </td>
		
	</tr>
</table>

<table align="center" border="0" width="550">
	<tr>
		<td bgcolor="#d5d5d5" height="10">  </td>
	</tr>
</table>




<?php

include("conexion.php");
@$IdEmpleado=$_POST['idempleado'];
@$NombreEmpleado=$_POST['nombreE'];
@$FechaInicial=$_POST['fechai'];
@$FechaFinal=$_POST['fechaf'];


if(isset ($IdEmpleado) and isset ($NombreEmpleado) and isset ($FechaInicial) and isset($FechaFinal)) {
	

	
$consulta_empleado=mysqli_query($conecta,"select empleado.idEmpleado, pagoempleado.idPagoEmpleado, No_Seguro, empleado.Nombre as NombreEmp, Apaterno, Amaterno, CURP,RFC, area.Nombre as NombreArea, area.Turno, pagoempleado.FechaInicial as FechaEmpInicial,pagoempleado.FechaFinal as FechaEmpFinal, nomina.dias_trabajados, prenomina.Bonos, prenomina.Descuentos, prenomina.SalarioBase, prenomina.SalarioDiario, nomina.seguro, nomina.isr, nomina.sueldo_total from empleado inner join pagoempleado inner join area inner join nomina inner join prenomina where area.idArea=empleado.idArea and empleado.idEmpleado='$IdEmpleado' and pagoempleado.idEmpleado='$IdEmpleado' and prenomina.idEmpleado='$IdEmpleado' and nomina.idEmpleado='$IdEmpleado' and empleado.Nombre='$NombreEmpleado' and pagoempleado.FechaInicial='$FechaInicial' and pagoempleado.FechaFinal='$FechaFinal' ; ");

@$numr = mysqli_num_rows($consulta_empleado);

if($numr > 0){
while($resultados=mysqli_fetch_array($consulta_empleado)){
	

	echo '<table align="center"  border="0" cellpadding="5" cellspacing="5"  width="550">';
	
	echo '<tr>';
	echo '<td>Id Empleado:</td>';
	echo '<td>';
	echo $resultados['idEmpleado'];
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>N&uacute;mero de recibo:</td>';
	echo '<td>';
	echo $resultados['idPagoEmpleado'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>RFC:</td>';
	echo '<td>';
	echo $resultados['RFC'];
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td colspan="2" align="center">Periodo De Pago: </td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>N&uacute;mero Seguro</td>';
	echo '<td>';
	echo $resultados['No_Seguro'];
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>';
	echo 'Fecha Inicial:';
	echo '</td>';
	echo '<td>';
	echo $resultados['FechaEmpInicial'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Nombre</td>';
	echo '<td>';
	echo $resultados['NombreEmp'];
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>';
	echo 'Fecha Final:';
	echo '</td>';
	echo '<td>';
	echo $resultados['FechaEmpFinal'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Apellido Paterno</td>';
	echo '<td>';
	echo $resultados['Apaterno'];
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td >Dias Trabajados: </td>';
	echo '<td>';
	echo $resultados['dias_trabajados'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Apellido Materno</td>';
	echo '<td>';
	echo $resultados['Amaterno'];
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>&Aacute;rea:</td>';
	echo '<td>';
	echo $resultados['NombreArea'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>Turno:</td>';
	echo '<td>';
	echo $resultados['Turno'];
	echo '</td>';
	echo '</tr>';
	
	
	
	
	echo '</table><br/>';
	
	echo '<table align="center" border="0" width="550">';
	echo '<tr>';
		echo '<td bgcolor="#d5d5d5" height="10">  </td>';
	echo '</tr>';
    echo '</table>';

	echo '<table align="center"  border="0" cellpadding="5" cellspacing="5"  width="550">';
		
	echo '<tr>';
	echo '<td>Salario:</td>';
	echo '<td>';
	echo $resultados['SalarioBase'];
	echo '</td>';
	echo '<td></td>';
	echo '<td>IMSS</td>';
	echo '<td>';
	echo $resultados['seguro'];
	echo '</td>';
	echo '</tr>';
	


	echo '<tr>';
	echo '<td>Bonos: </td>';
	echo '<td>';
	echo $resultados['Bonos'];
	echo '</td>';
	echo '<td></td>';
	echo '<td>ISR</td>';
	echo '<td>';
	echo $resultados['isr'];
	echo '</td>';
	echo '</tr>';
	
	
	
	echo '<tr>';
	
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td>Incidencias</td>';
	echo '<td>';
	if( $resultados['dias_trabajados']==7){
		$des=0;	
			
	}
	if( $resultados['dias_trabajados']==6){
		$des=$resultados['SalarioDiario'];	
			
	}
	elseif( $resultados['dias_trabajados']==5){
		$des=$resultados['SalarioDiario']*2;
		
	}
	elseif( $resultados['dias_trabajados']==4){
		$des=$resultados['SalarioDiario']*3;
		
	}
	elseif( $resultados['dias_trabajados']==3){
		$des=$resultados['SalarioDiario']*4;
		
	}
	elseif( $resultados['dias_trabajados']==2){
		$des=$resultados['SalarioDiario']*5;
		
	}
	elseif( $resultados['dias_trabajados']==1){
		$des=$resultados['SalarioDiario']*6;
		
	}
	
	
	echo $des;
	echo '</td>';
	
	echo '</tr>';
	
	
    echo '</table><br/>';
	
	echo '<table align="center" border="0" width="550">';
	echo '<tr>';
		echo '<td bgcolor="#d5d5d5" height="10">  </td>';
	echo '</tr>';
    echo '</table>';
	
	echo '<table align="center"  border="0" cellpadding="5" cellspacing="5">';

	echo '<tr>';
	echo '<td>Salario + Bonos:</td>';
	echo '<td>';
	echo $SB=$resultados['SalarioBase'] + $resultados['Bonos'] ;
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Deducci&oacute;n:</td>';
	echo '<td>';
	echo $Deduccion=$resultados['seguro'] + $resultados['isr'] + $des ;
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';
	
	
	echo '<tr>';
	echo '<td>Saldo total:</td>';
	echo '<td>';
	echo $SB-$Deduccion;
	echo '</td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';

    echo '</table><br/>';
    
    
  echo '<table align="center" border="0" width="550">';
	echo '<tr>';
		echo '<td bgcolor="#d5d5d5" height="10">  </td>';
	echo '</tr>';
    echo '</table>';
    
    echo '<table border="0" align="center">';
    
    echo '<tr>';

	echo '<td align="center">';

   /* echo "<a href='ReporteEmpleado.php?codemp=$resultados[idEmpleado]'>Imprimir Pago</a>";*/
    
    echo "<a href='ReporteEmpleado.php?codemp=$resultados[idEmpleado]&fechai=$resultados[FechaEmpInicial]&fechaf=$resultados[FechaEmpFinal]'>
    <button class='btn waves-effect waves-light' name='Imprimir'>Imprimir Pago<i class='material-icons right'>send</i></button></a>&nbsp;&nbsp;&nbsp;";
    
    echo "<a href='VisualizarPagoEmpleado.php'><button class='btn waves-effect waves-light red' name='Cancelar'>Cancelar</button></a>";
	
    echo '</td>';
   
    echo '</tr>';
    echo '</table>';
    
    echo '<table align="center" border="0" width="550">';
	echo '<tr>';
		echo '<td bgcolor="#d5d5d5" height="10">  </td>';
	echo '</tr>';
    echo '</table>';
   

 
	
	

	}
	}
	else{
		
	   echo '<script type="text/javascript">';
       echo 'alert("Pago del Empleado no encontrado")';
       echo "</script>";
       header("Refresh:0;URL=VisualizarPagoEmpleado.php");
      

	}
	
	}
	
	

?>
<!--<tr>
<td>
<input type="button"  name="Cancelar" value="Cancelar" onclick="javascript:window.location='VisualizarPagoEmpleado.php';"/>

</td>
</tr>-->




</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datos</title>
<style type="text/css">
<!--
.Estilo2 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
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
<!-- ok -->
<div class="col s6 offset-s3 center">
<form name="inicio" method="post">

<div class="row">
<form class="col s10 offset-s1">

<table class="responsive-table">



	<form name="inicio" method="post">
		<table width="882" height="101" border="1" align="center">
			<tr>
				<td class="Estilo2">Resultados de la encuesta.</td>	
			</tr>
	
				<td><strong>Pregunta 1: Los empleados son pacientes tomando su orden. </strong></td>			
	             <?php

						$consulta=mysqli_query($conecta,"select count(pregunta1) as AcuerdosTotal from encuesta where pregunta1='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta1) as DesacuerdosTotal from encuesta where pregunta1='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
					
				
				
				<td><strong>Pregunta 2: Los empleados son educados con usted.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta2) as AcuerdosTotal from encuesta where pregunta2='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta2) as DesacuerdosTotal from encuesta where pregunta2='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
					
				
				
				<td><strong>Pregunta 3: El servicio de los meseros es puntual.</strong></td>			
	             <?php
						include("conexion.php");
						$consulta=mysqli_query($conecta,"select count(pregunta3) as AcuerdosTotal from encuesta where pregunta3='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta3) as DesacuerdosTotal from encuesta where pregunta3='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
				
				
				
				
				<td><strong>Pregunta 4: La atenci&oacute;n de los empleados es la correcta.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta4) as AcuerdosTotal from encuesta where pregunta4='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta4) as DesacuerdosTotal from encuesta where pregunta4='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
				
				<td><strong>Pregunta 5: Tiene educacion los empleados hacia usted.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta5) as AcuerdosTotal from encuesta where pregunta5='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta5) as DesacuerdosTotal from encuesta where pregunta5='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
				
				
					<td><strong>Pregunta 6: La comida se sirve caliente y/o fresca.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta6) as AcuerdosTotal from encuesta where pregunta6='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						include("conexion.php");
						$consulta1=mysqli_query($conecta,"select count(pregunta6) as DesacuerdosTotal from encuesta where pregunta6='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
				
				
				<td><strong>Pregunta 7: La considera sabrosa la comida.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta7) as AcuerdosTotal from encuesta where pregunta7='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta7) as DesacuerdosTotal from encuesta where pregunta7='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
					
					
					<td><strong>Pregunta 8: El men&uacute; presenta sufiente variedad de productos.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta8) as AcuerdosTotal from encuesta where pregunta8='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta8) as DesacuerdosTotal from encuesta where pregunta8='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
				
				
				<td><strong>Pregunta 9: Considera la comida de calidad.</strong></td>			
	             <?php
						include("conexion.php");
						$consulta=mysqli_query($conecta,"select count(pregunta9) as AcuerdosTotal from encuesta where pregunta9='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						include("conexion.php");
						$consulta1=mysqli_query($conecta,"select count(pregunta9) as DesacuerdosTotal from encuesta where pregunta9='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>
					
					
					<td><strong>Pregunta 10:  Las bebidas se sirven fr&iacute;as.</strong></td>			
	             <?php
						
						$consulta=mysqli_query($conecta,"select count(pregunta10) as AcuerdosTotal from encuesta where pregunta10='Acuerdo'");
                        $resultado = mysqli_fetch_assoc($consulta);

							
							echo"<tr> <td> Acuerdo: ".$resultado['AcuerdosTotal']."</td></tr>";
							
						
					?>
					
					<?php
						
						$consulta1=mysqli_query($conecta,"select count(pregunta10) as DesacuerdosTotal from encuesta where pregunta10='Desacuerdo'");
                        $resultado1 = mysqli_fetch_assoc($consulta1);

						echo"<tr> <td> Desacuerdo: ".$resultado1['DesacuerdosTotal']."</td></tr>";
						
					?>	
					
	
	
	
	
	</form>
	</div>
</body>
</html>

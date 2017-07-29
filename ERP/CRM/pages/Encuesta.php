<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Encuesta</title>
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

<form name="inicio" method="post">

<div class="row">
<form class="col s10 offset-s1">

<table class="responsive-table">
<tr>
				<td><div align="center"><span class="Estilo2">Encuesta.</span></div></td>	
				
	</tr>

<td width="345"><div align="center">Atenci&oacute;n.</div></td>
<td><div align="left">Desacuerdo.</div></td><td><div align="left">Acuerdo.</div></td>
     <tr>
		
		<td>1. Los empleados son pacientes tomando su orden.</td> 
		<td width="74"> <div align="center">
		 <p> <input type="radio" name="tipo1" id="tip1" value="Desacuerdo"/> <label for="tip1"></label> </p>	 
		</div>
	   <td width="95"> <div align="center">
	     <p> <input type="radio" name="tipo1" id="tip2" value="Acuerdo"/> <label for="tip2"> </label> </p>	
	   </div></td>
	</tr>
	
    <td>2. Los empleados son educados con usted.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo2" id="tip3" value="Desacuerdo"/> <label for="tip3"></label> </p>	
	    </div>
	   <td width="95"> <div align="center">
	    <p> <input type="radio" name="tipo2" id="tip4"  value="Acuerdo"/> <label for="tip4"></label> </p>	
	   </div></td>
	</tr>
	
	  <td>3. La atenci&oacute;n de los meseros es inmediata.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo3" id="tip5" value="Desacuerdo"/> <label for="tip5"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	    <p> <input type="radio" name="tipo3" id="tip6"  value="Acuerdo"/> <label for="tip6"></label> </p>
	   </div></td>
	</tr>
	  <td>4. La atenci&oacute;n de los empleados es la correcta.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo4" id="tip7" value="Desacuerdo"/> <label for="tip7"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	     <p> <input type="radio" name="tipo4" id="tip8"  value="Acuerdo"/> <label for="tip8"></label> </p>
	   </div></td>
	</tr>
	
	<td>5. La presentaci&oacute;n de los empleados es adecuada.</td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo5" id="tip9" value="Desacuerdo"/> <label for="tip9"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo5" id="tip10"  value="Acuerdo"/> <label for="tip10"></label> </p>
	   </div></td>
	</tr>
	
<td width="345"><div align="center">Calidad del producto.</div></td>
<td><div align="left">Desacuerdo.</div></td><td><div align="left">Acuerdo.</div></td>
     <tr>
		
		<td>1. La comida se sirve caliente y/o fresca.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo6" id="tip11" value="Desacuerdo"/> <label for="tip11"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo6" id="tip12"  value="Acuerdo"/> <label for="tip12"></label> </p>
	   </div></td>
	</tr>
    
	<td>2. Considera sabosa la comida.</td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo7" id="tip13" value="Desacuerdo"/> <label for="tip13"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo7" id="tip14"  value="Acuerdo"/> <label for="tip14"></label> </p>
	   </div></td>
	</tr>
	  
	  <td>3. El men&uacute; presenta sufiente variedad de productos.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo8" id="tip15" value="Desacuerdo"/> <label for="tip15"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo8" id="tip16"  value="Acuerdo"/> <label for="tip16"></label> </p>
	   </div></td>
	</tr>
	
	<td>4. La comida tiene buena presentaci&oacute;n.</td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo9" id="tip17" value="Desacuerdo"/> <label for="tip17"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	  <p> <input type="radio" name="tipo9" id="tip18"  value="Acuerdo"/> <label for="tip18"></label> </p>
	   </div></td>
	</tr>
	
	  <td>5. Los costos son acordes a la calidad del producto. </td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo10" id="tip19" value="Desacuerdo"/> <label for="tip19"></label> </p>
	    </div>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo10" id="tip20"  value="Acuerdo"/> <label for="tip20"></label> </p>
	   </div></td>
	</tr>


    <tr>
		<td>Quejas:</td>
		<td><textarea name="quejas"></textarea></td>
	</tr>
	
     <tr>
		<td>Sugerencias:</td>
		<td><textarea name="sugerencia"></textarea></td>
	</tr>
	
	
		<td>Nombre Cliente</td>
		<td> <select name="clientes">
			<option></option>
			<?php
			
			$consulta_municipio=mysqli_query($conexion,"select * from Clientes order by Nombre");
			while($resultados=mysqli_fetch_array($consulta_municipio)){
			 echo '<option value='.$resultados['idClientes'].'>'.$resultados['Nombre'].'</option>';
			}
			?>
			</select>
		</td>
	</tr>
	
	
	<tr>
	  <td colspan="2"><div align="center">
	    <input type="submit" name="Guardar" value="Guardar"/>
	    <input type="button" value="Regresar" onclick="javascript:window.location='../index.php';"/>
	    </div></td>
	</tr>
	
	
</table>
</form>
</div>
</form>		
</body>
</html>


<?php
	@$p1=$_POST['tipo1'];
	@$p2=$_POST['tipo2'];
	@$p3=$_POST['tipo3'];
	@$p4=$_POST['tipo4'];
	@$p5=$_POST['tipo5'];
	@$p6=$_POST['tipo6'];
	@$p7=$_POST['tipo7'];
	@$p8=$_POST['tipo8'];
	@$p9=$_POST['tipo9'];
	@$p10=$_POST['tipo10'];
	@$que=$_POST['quejas'];
	@$sug=$_POST['sugerencia'];
	@$cliente=$_SESSION['id_usuario'];
	
	   if(isset($p1) and isset($p2) and isset($p3) and isset($p4) and isset($p5) and isset($p6) and isset($p7) and isset($p8) and isset($p9) and isset($p10)  and isset($que)  and isset($sug) and isset($cliente))
	   {
		 $inserta=mysqli_query($conexion,"insert into encuesta values(NULL,'$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$que','$sug','$cliente');");
		    if($inserta)
		     {
		        echo '<script type="text/javascript">';
			    echo 'alert("Registro exitoso.")';
			    echo "</script>";
			    echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
		     }
		    else
		     {
			 	echo '<script type="text/javascript">';
			    echo 'alert("Algo fallo.")';
			    echo "</script>";
			    echo '<meta http-equiv="Refresh" content="0;URL=encuesta.php">';
		     }
	   }
?>




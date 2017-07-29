<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<!-- Que nunca Falte!!! -->
<?php 
include("../../../config.php"); 
include("components.php"); 

if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
if($_SESSION['accType']!= 60 && $_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Almacen")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>

<!-- ok -->

<center>
<h4 class="gen" align="center">INVENTARIO</center></h4>
<center>
<form name="inicio" method="post">

<tr align="center" bottom="middle">
<tr align="center" bottom="middle">
  <td>
  

<table style="width:30%;">
	
	<tr>
		<td height="57" align="center">Fecha:</td>
		<td><input type="text" name="fecha" value="<?php echo date("d-m-Y"); ?>" size"10"  readonly></td>
	</tr>
	<tr>
		<td height="57" align="center">Cantidad:</td>
		<td><input type="number" name="cant" required/></td>
	</tr>
	<tr>
		<td  align="center">Almacen</td>
		<td><rigt> <select name="almacen">
			<option></option>
			<?php
			
			$consulta_almacen=mysqli_query($conecta,"select * from almacen order by Ubicacion");
			while($resultados=mysqli_fetch_array($consulta_almacen)){
			 echo '<option value='.$resultados['idAlmacen'] .'>'.$resultados['Ubicacion']. '</option>';	
			}
			?>
			</select>
            </td>
            </tr>
		
    <tr>
		<td height="53" align="center">F. Entrada:</td>
		<td><input type="date" name="fechae" required /></td>
	</tr>
    
	<tr>
		<td height="53" align="center">F. Salida:</td>
		<td><input type="date" name="fechas" required /></td>
	</tr>
   	
	<tr>
		<td align="center">Materia Prima</td>
		<td> <select name="mate">
			<option></option>
			<?php
			
			$consulta_materia_prima=mysqli_query($conecta, "select * from materiaprima order by Nombre");
			while($resultados=mysqli_fetch_array($consulta_materia_prima)){
			 echo '<option value='.$resultados['idMateriaPrima'] .'>'.$resultados['Nombre']. '</option>';	
			}
			?>
			</select>
            </td>
            </tr>
	
	<tr>
		<td height="44" colspan="2"> <center> <input type="submit" class="button" name="Guardar" value="Guardar"/></center>
		</td>
	</tr>
	
</table>
</form>			

<?php

	@$Fecha=$_POST['fecha'];
	@$Cant=$_POST['cant'];
	@$Almacen=$_POST['almacen'];		
	@$FechaE=$_POST['fechae'];
	@$FechaS=$_POST['fechas'];
	@$Mate=$_POST['mate'];
    
	
	
if(isset($Fecha) and isset($Cant) and isset($Almacen)and isset($FechaE)and isset($FechaS)and isset($Mate))
	   {
	$inserta=mysqli_query($conecta,"insert into inventario values(NULL, '$Fecha','$Cant','$Almacen','$FechaE','$FechaS','$Mate');");
		  
		  
		    if($inserta)
		     {
		      echo 'Dato Insertado';
		     }
		    else
		     {
			 echo 'Dato no Insertado';
			 }
	   }
	   mysqli_close($conecta);
?>
</body>

</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css">

<title>Consulta</title>
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
<h4 class="gen" align="center"> CONSULTA A INVENTARIO</center></h4>
<center><div>
                <h4  align="center"></h2>
<br><br><br>
<table style="width:30%;">
 <tr>
    <td width="110" align="center">Restaurante:</td>
    <td width="137"><input name="nombre" type="text" value="EL RECUERDO" readonly="readonly" /></td>
 </tr>
	<tr>
		<td align="center">Inventario por:</td>
			<?php
			$consulta_empleado=mysqli_query($conecta,"select Nombre from empleado where idEmpleado=1");
			while($resultados=mysqli_fetch_array($consulta_empleado)){
			echo'<td>';
			//echo $resultados['Nombre'];
			echo '<input type="text" name="fecha" readonly="readonly" value='.$resultados['Nombre'].'>';
			echo '</td>';
			}
			?>
  <tr>
    <td>Inventario a fecha:</td>
    <td><input type="text" name="fecha" value="<?php echo date("d-m-Y"); ?>" size="15" readonly></td>
 </tr>
 </table>
</table>
 </center>
 <br>
 <br>
 
 <br>
<center><table style="width:70%;">

<tr>
<td align="center"> Producto </td>
<td align="center"> Cantidad</td>
<td align="center"> Unidad </td>
<td align="center"> Area </td>
<td align="center"> Fecha entrada </td>
<td align="center"> Fecha salida </td>
<td align="center"> Existencias </td>
</tr>
<tr>

<?php
$consulta_datos=mysqli_query($conecta,"select * from inventario inner join almacen inner join materiaprima where materiaprima.idMateriaPrima=almacen.idMateriaPrima and almacen.idAlmacen=inventario.idAlmacen");
while($resultados=mysqli_fetch_array($consulta_datos)) 
{
	echo'<tr><td>';
	echo $resultados['Nombre'];
	echo'<td>';
	echo $resultados['Cantidad'];
	echo'<td>';
	echo $resultados['Unidad'];
	echo'<td>';
	echo $resultados['Ubicacion'];
	echo'<td>';
	echo $resultados['Fecha_Entrada'];
	echo'<td>';
	echo $resultados['Fecha_Salida'];
	echo'<td>';
	echo $resultados['Existencia'];
	echo '</td></tr>';
}
?>
</tr>
</table>
</center>

</td>
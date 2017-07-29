<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Almacen</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<!-- Que nunca Falte!!! -->
<!-- Que nunca Falte!!! -->
<?php 
include("../../../config.php"); 
include("../components2.html"); 
include("conexion.php");

if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
if($_SESSION['accType']!= 60 ||$_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Almacen")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>
<!-- ok -->
<!-- ok -->

<center>
<h5 class="gen" align="center"> ALMACEN </h5>
	<br><br>
<form name="almacen" method="post">
<center><table style="width:70%;">

<tr align="center">
<td><h5>Producto</h5></td>
<td><h5>Existencia</h5></td>
<td><h5>Ubicacion</h5></td>
<td><h5>Fecha de Caducidad</h5></td>
<td><h5>Proveedor</h5></td></tr>
<?php
//include ("conexion.php");
		$consulta_datos=mysqli_query ($conecta,"select * from almacen;");
		while($resultado=mysqli_fetch_array($consulta_datos))
		{
			@$idmatpri=$resultado['idMateriaPrima'];
			@$idprovee=$resultado['idProveedores'];
			echo '<tr align="center"><td>';
			$consulta_materiaprima=mysqli_query($conecta,"select Nombre from materiaprima where idMateriaPrima=$idmatpri;");
				 while($resultados1=mysqli_fetch_array($consulta_materiaprima))
				 {
					 @$materia=$resultados1['Nombre'];
				 }
			echo "<a href='almacen2.php?idprod=$resultado[idAlmacen]'>".$materia."</a>";
			echo '</td><td>';
			echo $resultado['Existencia'];
			echo '</td><td>';
			echo $resultado['Ubicacion']; 
			echo '</td><td>';
			echo $resultado['FechaCaducidad'];
			echo '</td><td>';
			$consulta_proveedores=mysqli_query($conecta,"select Nombre from proveedores where idProveedores=$idprovee;");
				 while($resultados2=mysqli_fetch_array($consulta_proveedores))
				 {
					 @$proveedores=$resultados2['Nombre'];
				 }
				echo $proveedores;
			echo '</td></tr>';
			
		}
		mysqli_close($conecta);
?>

<tr align="center">
<td colspan="5"> 
<?php echo'---------------------------------------------------------------------------------------------------------' ?></td>
</tr>

<tr align="center">
<td><h5>Producto</h5></td>
<td><h5>Existencia</h5></td>
<td><h5>Ubicacion</h5></td>
<td><h5>Fecha de Caducidad</h5></td>
<td><h5>Proveedor</h5></td>
</tr>
<tr align="center">
<?php
//include ("conexion.php");
			@$cv=$_GET['idprod'];

			$consulta=mysqli_query($conecta,"select * from almacen where idAlmacen='$cv';");					
			while($resultado=mysqli_fetch_array($consulta))
			{ 
			@$idmatpri=$resultado['idMateriaPrima'];
			@$idprovee=$resultado['idProveedores'];
			$consulta_materiaprima=mysqli_query($conecta,"select Nombre from materiaprima where idMateriaPrima=$idmatpri;");
				 while(@$resultados1=mysqli_fetch_array($consulta_materiaprima))
				 {
					 @$materia=$resultados1['Nombre'];
				 }
				@$materia;
				@$existencia=$resultado['Existencia'];
				@$ubicacion=$resultado['Ubicacion'];
				@$fechacaducidad=$resultado['FechaCaducidad'];
				$consulta_proveedores=mysqli_query($conecta,"select * from proveedores where idProveedores=$idprovee;");
				 while($resultados2=mysqli_fetch_array($consulta_proveedores))
				 {
					 @$proveedor=$resultados2['Nombre'];
				 }
				@$proveedor;
			}
			mysqli_close($conecta);
	?>
		<td><input type="text" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required value="<?php echo @$materia;?>" readonly/></td>
		<td><input type="number" name="exist" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required value="<?php echo @$existencia;?>"/></td>
		<td><input type="text" name="ubica" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required value="<?php echo @$ubicacion;?>"/></td>
        <td><input type="date" name="fecha" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required value="<?php echo @$fechacaducidad;?>"/></td>
        <td><input type="text" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required value="<?php echo @$proveedor;?>" readonly/></td>
        
</tr>		
<tr align="center">
<td colspan="5"><input type="submit"  class="button" value="Modificar"/></td>
<td colspan="3" align="right"><input type="button" class="button" value="Regresar" onClick="javascript:window.location='almacen.php';"/></td> 
</tr>



</table></center>
</form>
</body>

<?php
//include ("conexion.php");
@$exi=$_POST['exist'];
@$ubi=$_POST['ubica'];
@$fec=$_POST['fecha'];

if(isset($exi) and isset($ubi) and isset($fec))
{
	$actualiza=mysqli_query($conecta,"update almacen set Existencia='$exi', Ubicacion='$ubi', FechaCaducidad='$fec' where idAlmacen=$cv;");
	
	if($actualiza)
	{
		echo"Dato Actualizado";
		echo '<meta http-equiv="Refresh" content="0;URL=almacen2.php">';
	}
	else
	{
		echo"Dato no Actualizado";
	}
}
mysqli_close($conecta);
?>


</html>















































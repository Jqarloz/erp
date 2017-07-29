<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Almacen</title>

<link rel="stylesheet" href="css/estilos.css">

</head>

<body>
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

<center>
<h5 align="center" class="gen"> ALMACEN</h5>
                
                <br><br>

<form name="almacen" method="post">
<table style="width:70%;">

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
			echo "<a href='almacen1.php?idprod=$resultado[idAlmacen]'>".$materia."</a>";
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
				 while($resultados1=mysqli_fetch_array($consulta_materiaprima))
				 {
					 @$materia=$resultados1['Nombre'];
				 }
				 $consulta_proveedores=mysqli_query($conecta,"select Nombre from proveedores where idProveedores=$idprovee;");
				 while($resultados2=mysqli_fetch_array($consulta_proveedores))
				 {
					 @$proveedores=$resultados2['Nombre'];
				 }
				 
				@$mapr=$materia;
				@$exis=$resultado['Existencia'];
				@$ubic=$resultado['Ubicacion'];
				@$feca=$resultado['FechaCaducidad'];
				@$prov=$proveedores;
				
			}
			mysqli_close($conecta);
	?>
		<td><?php echo @$mapr;?></td>
		<td><?php echo @$exis;?></td>
		<td><?php echo @$ubic;?></td>
        <td><?php echo @$feca;?></td>
		<td><?php echo @$prov;?></td>

</tr>
<tr align="center">
<td colspan="5"><input type="submit" class="button" value="Si" name="eliminar"/></td>
<td colspan="3"><input type="button" class="button" value="No" onClick="javascript:window.location='almacen.php';"/></td> 
</tr>
</table>
</form>
</body>
<br>
<center><input type="button" class="button" value="REGRESAR" onClick="javascript:window.location='almacen.php';"/>

</html>

<?php
//include ("conexion.php");
@$elim=$_POST['eliminar'];
	
	if($elim == 'Si')
	{
		$elimina=mysqli_query($conecta, "delete from almacen where idAlmacen='$cv';");
	
		if($elimina)
		{
			echo "Dato Eliminado";
			echo '<meta http-equiv="Refresh" content="0;URL=almacen1.php">';
		}
		else
		{
			echo"Dato no Eliminado"; 
		}
	}
	mysqli_close($conecta);

?>
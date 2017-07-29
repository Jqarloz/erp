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
<h5 align="center" class="gen"> Eliminar registro</h5>
                
                <br><br>

<form name="almacen" method="post">
<table style="width:70%;">

<tr align="center">

<td><h5>Nombre</h5></td>
<td><h5>Categoria</h5></td>
<td><h5>Unidad</h5></td>
<td><h5>Cantidad </h5></td>
<td><h5>Urgencia </h5></td></tr>


<?php
//include ("conexion.php");
		$consulta_datos=mysqli_query ($conecta,"select * from requisicion;");
		while($resultado=mysqli_fetch_array($consulta_datos))
		{
			echo '<tr align="center"><td>';
			echo "<a href='eliminarq.php?idprod=$resultado[idMateriaPrima]'>".$resultado['Nombre']."</a>";
			echo '</td><td>';
			echo $resultado['Categoria'];
			echo '</td><td>';
			echo $resultado['Unidad'];
			echo '</td><td>';
			echo $resultado['Cantidad'];
			echo '</td><td>';
			echo $resultado['Urgencia'];
			echo '</td></tr>';
		}
		mysqli_close($conecta);
?>

<tr align="center">
<td colspan="5"> 
<?php echo'---------------------------------------------------------------------------------------------------------' ?></td>
</tr>

<tr align="center">

<td><h5>Nombre</h5></td>
<td><h5>Categoria</h5></td>
<td><h5>Unidad</h5></td>
<td><h5>Cantidad </h5></td>
<td><h5>Urgencia </h5></td></tr>
</tr>
<tr align="center">
<?php
//include ("conexion.php");
			@$cv=$_GET['idprod'];

			$consulta=mysqli_query($conecta,"select * from requisicion where idMateriaPrima='$cv';");					
			while($resultado=mysqli_fetch_array($consulta))
			{
			@$Nom=$resultado['Nombre'];	
		    @$Cat=$resultado['Categoria'];
			@$Ubi=$resultado['Unidad'];
			@$Can=$resultado['Cantidad'];
			@$Urg=$resultado['Urgencia'];
			}
			
			mysqli_close($conecta);
	?>
		<td><?php echo @$Nom;?></td>
		<td><?php echo @$Cat;?></td>
		<td><?php echo @$Ubi;?></td>
        <td><?php echo @$Can;?></td>
		<td><?php echo @$Urg;?></td>
</tr>
<tr align="center">
<td colspan="5"><input type="submit" class="button" value="Si" name="eliminar"/></td>
<td colspan="3"><input type="button" class="button" value="No" onClick="javascript:window.location='requisicion.php';"/></td> 
</tr>
</table>
</form>
</body>
<br>
<center><input type="button" class="button" value="REGRESAR" onClick="javascript:window.location='requisicion.php';"/>

</html>

<?php
//include ("conexion.php");
@$elim=$_POST['eliminar'];
	
	if($elim == 'Si')
	{
		$elimina=mysqli_query($conecta, "delete from requisicion where idMateriaPrima='$cv';");
	
		if($elimina)
		{
			echo "Dato Eliminado";
			echo '<meta http-equiv="Refresh" content="0;URL=eliminarq.php">';
		}
		else
		{
			echo"Dato no Eliminado"; 
		}
	}
	mysqli_close($conecta);

?>
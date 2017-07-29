<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Formulario de Almacen</title>

<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<!-- Que nunca Falte!!! -->
<!-- procesos -->
<?php 
include("../../../config.php"); 
include("components2.php"); 

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

<!-- ok -->

<center>
<h4 class="gen" align="center"> Almacen </center></h4>
<center><div>
                <h4  align="center"></h4>
                <form name="Busqueda" class="" method="post">
				<table style="width:70%;">	
    			<tr>
                
    				<td> 
                    	<p class="text"><h5>Buscar:</h5>
                    </td>
        			<td colspan="3">
                    	<input type="text" class="textbox" name="busca" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required/>
                    </td>
    			</tr>
    			<tr>
					<td colspan="2" > <center><input type="submit" value="Buscar" class="waves-effect waves-light btn"/></center></td> 
				</tr> 
				<?php
	@$buscar=$_POST['busca'];
	if(isset($buscar))
	{
		/*$consulta_datos=mysqli_query ($conecta,"select * from almacen;");
		while($resultado=mysqli_fetch_array($consulta_datos))
		{
			@$idmatpri=$resultado['idMateriaPrima'];
			//@$idprovee=$resultado['idProveedores'];
				$consulta_materiaprima=mysqli_query($conecta,"select Nombre from materiaprima where idMateriaPrima=$idmatpri;");
				 while($resultados1=mysqli_fetch_array($consulta_materiaprima))
				 {
					 @$materia=$resultados1['Nombre'];
				 }
		}*/
		$dc=explode(" ",$buscar);
		$cp=count($dc);
		if($cp<2)
		{
			
			$consulta_almacen=mysqli_query($conecta,"select * from almacen where idMateriaPrima like ('%$buscar%') or Ubicacion like ('%$buscar%') or FechaCaducidad like ('%$buscar%') or idProveedores like ('%$buscar%');");
			echo " ";
			
		}
		else
		{
			$consulta_almacen=mysqli_query($conecta,"select * from almacen where match (idMateriaPrima, Ubicacion, FechaCaducidad, idProveedores) against ('%$buscar%');");
			echo "se usa match ";
		}
		
		$nr=mysqli_num_rows($consulta_almacen);
		if($nr>0)
		{
			echo "<center><h6>Se Encontro<br>" .$nr. "<center> Resultados</center>";
			
			echo '<br><tr align="center"><td>MATERIA PRIMA</td><td>EXISTENCIA</td><td>UBICACIÓN</td><td>FECHA CADUCIDAD</td><td>PROVEEDORES</td></tr>';
		
			while($resultado=mysqli_fetch_array($consulta_almacen))
			{
				echo '<tr align="center"><td>';
				echo $resultado['idMateriaPrima'];
				echo '</td><td >';
				echo $resultado['Existencia'];
				echo '</td><td >';
				echo $resultado['Ubicacion'];
				echo '</td><td >';  
				echo $resultado['FechaCaducidad'];
				echo '</td><td >';
				echo $resultado['idProveedores'];
				echo '</td></tr>';
			}
		}
		else
		{
			echo '<h4>No se Hallaron Resultados';
		}
	}
	mysqli_close($conecta);
?> 
</table></center></form>
                </div>
                <br><br>

<form name="almacen" method="post">
<center><table style="width:70%;">

<tr align="center">
<td><h5>Producto</h5></td>
<td><h5>Existencia</h5></td>
<td><h5>Ubicacion</h5></td>
<td><h5>Fecha de Caducidad</h5></td>
<td><h5>Proveedor</h5></td></tr>
<tr align="center">
 <td>
 <select name="materiaprima" class="textbox"/> 
 <option></option>
 <?php
// include ("conexion.php");
		$consulta_materiaprima=mysqli_query($conecta,"select * from materiaprima order by Nombre;");
		while($resultadossss=mysqli_fetch_array($consulta_materiaprima))
		{
			echo'<option value='.$resultadossss['idMateriaPrima'].'>'.$resultadossss['Nombre'].'</option>';
		}
		?>
        </td>

<td><input type="text" class="textbox" name="existencia" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required/></td>
<td><input type="text" class="textbox" name="ubicacion" pattern="[A-Z-a-z-áéíóú\-1-2-3-4-5-6-7-8-9-0-s]+" required/></td>
<td><input type="date"  class="textbox" name="fechacaducidad" required/>
</td>
<td>
<select name="proveedor" class="textbox" /> 
<option></option>
<?php
//include ("conexion.php");
		$consulta_proveedor=mysqli_query($conecta,"select * from proveedores order by Nombre;");
		while($resultadosssss=mysqli_fetch_array($consulta_proveedor))
		{
			echo'<option value='.$resultadosssss['idProveedores'].'>'.$resultadosssss['Nombre'].'</option>';
		}
		?>
        </td>

</tr>
<tr align="center">
<td colspan="2"><input type="submit" value="Agregar" class="waves-effect waves-light btn"/></td>
<td colspan="2"><input type="button" value="Eliminar" onClick="javascript:window.location='almacen1.php';" class="waves-effect waves-light btn"/></td>
<td colspan="2"><input type="button" value="Modificar" onClick="javascript:window.location='almacen2.php';" class="waves-effect waves-light btn"/></td> 
</tr>

<tr align="center">
<td colspan="5"> 

</tr>

<tr align="center">
<td><h5>Producto</h5></td>
<td><h5>Existencia</h5></td>
<td><h5>Ubicacion</h5></td>
<td><h5>Fecha de Caducidad</h5></td>
<td><h5>Proveedor</h5></td>
</tr>
<?php
//include ("conexion.php");
		@$consulta_datos=mysqli_query ($conecta,"select * from almacen;");
		while(@$resultado=mysqli_fetch_array($consulta_datos))
		{
			@$idmatpri=$resultado['idMateriaPrima'];
			@$idprovee=$resultado['idProveedores'];	 
			echo '<tr align="center"><td>';
				$consulta_materiaprima=mysqli_query($conecta,"select Nombre from materiaprima where idMateriaPrima=$idmatpri;");
				 while($resultados1=mysqli_fetch_array($consulta_materiaprima))
				 {
					 @$materia=$resultados1['Nombre'];
				 }
				echo $materia;
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
?>

</table></center>
<table clas"gen" align="center">
<center>
</table>
</form>
</body>

</html>
<?php
//include ("conexion.php");
@$map=$_POST['materiaprima'];
@$exi=$_POST['existencia'];
@$ubi=$_POST['ubicacion'];
@$fec=$_POST['fechacaducidad'];
@$pro=$_POST['proveedor'];

if(isset($map) and isset($exi) and isset($ubi) and isset($fec) and isset($pro))
{
	$inserta=mysqli_query($conecta,"insert into almacen values(NULL, '$exi', '$ubi', '$fec', '$map', '$pro');");
	
	if($inserta)
	{
		echo"Dato Insertado";
		//header ("Refresh:0; URl=almacen.php");
		echo '<meta http-equiv="Refresh" content="0;URL=almacen.php">';
	}
	else
	{
		echo"Dato no insertado";
	}
}

?>
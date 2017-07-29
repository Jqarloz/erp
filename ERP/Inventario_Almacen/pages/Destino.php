<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Destino</title>
</head>
<body>
<!-- Que nunca Falte!!! -->
<?php 
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
<!-- ok --><form name="destino" method="post" enctype="multipart/form-data">
<center><table  style="width:50%;">
<!--<tr>
<td>Nombre de Destino:</td>
<td><input type="text" name="destino" required="required"/></td>
</tr>
<tr>
<td>Foto:</td>
<td><input type="file" name="foto"/></td>
</tr>-->
<tr>
<td>Archivo de Solicitud:</td>
<td><input type="file" name="video" /> </td>
</tr>
<tr>
	<td>Estado</td>
    <td><select name="urge">

<?php
//include("conexion.php");
$consulta_urge=mysqli_query($conecta,"select * from estado where idEstado=1");
while($resultados=mysqli_fetch_array($consulta_urge))
{
	echo'<option value='.$resultados['idEstado'].'>'.$resultados['Estado'].'</option>';
}
?>
</select>
</td>
</tr>
</tr>
<tr>
<td>Fecha</td>
<td><input type="date"  class="textbox" name="fechacaducidad" required/></td>
<tr>
<td colspan="9"> <input type="submit" value="Guardar" class="waves-effect waves-light btn"/></center> </td>
</tr>
</table></center>
</form>
</body>
</html>
<?php
//include("conexion.php");
//@$via=$_POST['destino'];

//@$nomfoto=$_FILES['foto']['name'];
//@$origen=$_FILES['foto']['tmp_name'];
//@$destino="imagen/".$nomfoto;
//@copy($origen,$destino);

@$nomvideo=$_FILES['video']['name'];
@$origen1=$_FILES['video']['tmp_name'];
@$destino1="PDF/".$nomvideo;
@copy($origen1,$destino1);


@$urgen=$_POST['urge'];

@$fecha=$_POST['fechacaducidad'];

if(isset($destino1) and isset ($urgen) and isset ($fecha))
{
	$inserta=mysqli_query($conecta,"insert into solicitudcompra values(NULL,'$destino1','$urgen','$fecha');");
	if($inserta)
	{
		echo "dato insertado";
		//header("Refresh:3;");
		echo '<meta http-equiv="Refresh" content="0;URL=Destino.php">';
	}
	else
	{
		echo "dato no insertado";
	}
	}
	mysqli_close($conecta);	
	?>
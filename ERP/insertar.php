<!DOCTYPE html>
<html>
	<head>
		<title>Insertar</title>
	</head>
	<body>
		<form name="inserta" method="post" enctype="multipart/form-data">
			<table>

				<tr>
					<td>Nombre</td>
					<td><input type="text" name="nombre" required="[/\D/]*"></td>	
				</tr>

				<tr>
					<td>Descripción</td>
					<td><textarea name="desc" rows="10" cols="42"></textarea></td>	
				</tr>		

				<tr>
					<td>Imagen</td>
					<td><input type="file" name="imagen" /></td>
				</tr>

				<tr>
					<td>Video</td>
					<td><input type="file" name="img" /></td>
				</tr>

				<tr>
					<td>Tipo</td>
					<td><input type="text" name="tipo" required="[/\D/]*"></td>	
				</tr>

				<tr>
					<td>
						<input type="submit" name="guardar" value="Guardar">
					</td>
				</tr>	
			</table>
		</form>
	</body>
</html>

<?php
	include("conexion.php");
	@$Nom=$_POST['nombre'];
	@$desc=$_POST['desc'];

	@$Imag=$_FILES['imagen']['name'];
	@$origen_img=$_FILES['imagen']['tmp_name'];
	@$dest_img="Imagen/".$Imag;
	@copy($origen_img,$dest_img);

	@$Imag2=$_FILES['img']['name'];
	@$origen_img2=$_FILES['img']['tmp_name'];
	@$dest_img2="Imagen/".$Imag2;
	@copy($origen_img2,$dest_img2);

	@$tipo=$_POST['tipo'];

	//if(isset($Nom) and isset($desc) and isset($Imag) and isset($Imag2) and isset($tipo)){
		$cons=mysqli_query($conexion,"insert into inscripcion values (null,'$Nom','$desc','$dest_img','$dest_img2','$tipo');");

		if($cons){
			echo "Dato insertado";	
		}
		else{
			echo "Dato no insertado";
		}
	//}else{
	//	echo "error";
	//}
?>
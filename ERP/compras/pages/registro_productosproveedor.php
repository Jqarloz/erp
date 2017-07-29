<html>
	<head>
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
if($_SESSION['accType']!= 40 || $_SESSION['accType'] != 100){
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Compras")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>
<!-- ok -->
		<form name="municipio" method="post">
		<table style="margin: 0 auto;width: 550px">
			<tr><td style="font-size: 30px">Agregar Productos <a style="font-size: 20px;" type="button" href="consulta-pedidos.php">Terminar</a></td></tr>
			<tr><td>Materia Prima:</td></tr>
			<tr>
				<td><Select name="ipr">
				<option></option>
				<?php
					@$consulta_pro=mysqli_query($conecta,"select * from MateriaPrima order by nombre;");
					while($resultados=mysqli_fetch_array($consulta_pro)){
						echo '<option value='.$resultados['idMateriaPrima'].'>'.$resultados['Nombre'];
					}
				?>
			</tr>
			<tr><td>Cantidad:</td></tr>
			<tr>
				<td><input type="text" id="Producto" name="cantidad" maxlength="25" /></td>
			</tr>
			<tr><td>Total:</td></tr>
			<tr>
				<td><input type="text" id="Producto" name="total" maxlength="25" /></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Registrar" class="waves-effect waves-light btn"/><td>
			</tr>
	</body>
</html>

<?php
	@$nom=$_POST['ipr'];
	@$ap1=$_POST['cantidad'];
	@$am1=$_POST['total'];
	if(isset($nom) and isset($ap1) and isset($am1)){
		@$consulta_id=mysqli_query($conecta,"select idPedidoPreveedor from pedidopreveedor;");
		@$nr=mysqli_num_rows($consulta_id);
		$inserta=mysqli_query($conecta,"insert into materiaprima_has_pedidopreveedor values('$nom','$nr','$ap1','$am1');");
		if($inserta){
			@$cant=mysqli_query($conecta,"select Total from compras where idCompras='$nr';");
			while($resultados=mysqli_fetch_array($cant)){
					@$c=$resultados['Total'];
				}
			@$total=$c+$am1;
			mysqli_query($conecta,"Update Compras set Total='$total' where idCompras='$nr'");
			print '<script language="JavaScript">'; 
			print 'alert("Producto agregado");';
			print '</script>';
		}
		else{
			print '<script language="JavaScript">';
			print 'alert("Producto no agregado");';
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
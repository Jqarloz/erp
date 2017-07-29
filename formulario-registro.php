<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
	</head>
	<body>
		<!-- siempre -->
<?php include("menu.php"); ?>
<section class="ContentPage">
<div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a></figure></li>
    </div>
<!--end -->
		<form name="registro" method="post">
		<table style="margin: 0 auto; width: 30%;">
			<tr><td style="font-size: 30px">Informacion Requerida</td></tr>
			<tr><td>Nombre:</td></tr>
			<tr>
				<td><input type="text" id="nombre" name="nombre" maxlength="25" required/></td>
			</tr>
			<tr><td>Apellido Paterno:</td></tr>
			<tr>
				<td><input type="text" id="ap" name="ap" maxlength="25" required/></td>
			</tr>
			<tr><td>Apellido Materno:</td></tr>
			<tr>
				<td><input type="text" id="am" name="am" maxlength="25" required/></td>
			</tr>
			<tr><td>Email:</td></tr>
			<tr>
				<td><input type="text" id="email" name="email" maxlength="40" required/></td>
			</tr>
			<tr><td>RFC: <a target="_blank" href="http://www.consisa.com.mx/rfc">Consultar RFC</a></td></tr>
			<tr>
				<td><input type="text" id="rfc" name="rfc" maxlength="25" required/></td>
			</tr>
			<tr><td>Telefono:</td></tr>
			<tr>
				<td><input type="number" id="tel" name="tel" maxlength="12" required/></td>
			</tr>
			<tr><td>Calle:</td></tr>
			<tr>
				<td><input type="text" id="tel" name="call" maxlength="25" required/></td>
			</tr>
			<tr><td>Numero:</td></tr>
			<tr>
				<td><input type="number" id="tel" name="nume" maxlength="20" required/></td>
			</tr>
			<tr><td>Codigo Postal:</td></tr>
			<tr>
				<td><input type="number" id="tel" name="cod" maxlength="5" required/></td>
			</tr>
			<tr><td>Metodo de Pago:</td></tr>
			<tr>
				<td><input type="checkbox" id="test5" required/>
      			<label for="test5">Efectivo</label></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Guardar"/><td>
			</tr>
		</table>
	</body>
</html>

<?php
	include("conecta.php");
	@$nom=$_POST['nombre'];
	@$ap1=$_POST['ap'];
	@$am1=$_POST['am'];
	@$em=$_POST['email'];
	@$rf=$_POST['rfc'];
	@$t=$_POST['tel'];
	@$calle=$_POST['call'];
	@$numero=$_POST['nume'];
	@$cp=$_POST['cod'];
	if(isset($nom) and isset($ap1) and isset($am1) and isset($em) and isset($rf) and isset($t)and isset($calle) and isset($numero) and isset($cp)){
		$inserta=mysqli_query($conecta,"insert into clientes values(NULL,'$nom','$ap1','$am1','$t','$calle','$numero','$cp','$em','$rf');");
		if($inserta){
			print '<script language="JavaScript">'; 
			print 'alert("Registro correcto");'; 
			print '</script>';
			echo '<meta http-equiv="Refresh" content="0;URL=./compras/compras.php">';
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Registro no correcto");'; 
			print '</script>';
		}
	}
	mysqli_close($conecta);
?>
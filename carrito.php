<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
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


	<section>
		
	<?php
		$re=mysqli_query($conecta,"select * from platillo where Accion_idAccion=1;");
		while ($f=mysqli_fetch_array($re)) {
		?>
			<div class="producto">
				<center>
					<img src="ERP/ventas/pages/<?php echo $f['Imagen'];?>"><br>
					<span><?php echo $f['Nombre'];?></span><br>
					<?php if (isset($_SESSION['id_usuario'])){
						if ($_SESSION['tabla']=="clientes"){
					 ?>
					<a href="./detalles.php? id=<?php  echo $f['idPlatillo'];?>">ver</a>
					<?php } }?><!-- end if -->
				</center>
			</div>
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>
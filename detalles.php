<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
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
		include 'conexion.php';
		$re=mysqli_query($conecta,"select * from platillo where idPlatillo=".$_GET['id']);
		while ($f=mysqli_fetch_array($re)) {
		?>
			
			<center>
				<img src="ERP/Modulos/co_ve/pages/<?php echo $f['Imagen'];?>"><br>
				<span><?php echo $f['Nombre'];?></span><br>
				<span>Precio: <?php echo $f['Precio'];?></span><br>
				<a href="./carritodecompras.php? id=<?php  echo $f['idPlatillo'];?>">Añadir al carrito de compras</a><br>
				<a href="carrito.php">Menu</a>
			</center>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>
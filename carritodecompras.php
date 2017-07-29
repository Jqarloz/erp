<?php
	session_start();
	include("menu.php");
	include("config.php");
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysqli_query($conecta,"select * from platillo where idPlatillo=".$_GET['id']);
						while ($f=mysqli_fetch_array($re)) {
							$nombre=$f['Nombre'];
							$precio=$f['Precio'];
							$imagen=$f['Imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'nombre'=>$nombre,
										'precio'=>$precio,
										'imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}

	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysqli_query($conecta,"select * from platillo where idPlatillo=".$_GET['id']);
			while ($f=mysqli_fetch_array($re)) {
				$nombre=$f['Nombre'];
				$precio=$f['Precio'];
				$imagen=$f['Imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'nombre'=>$nombre,
							'precio'=>$precio,
							'imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<!-- siempre -->
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
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				<div class="producto">
					<center>
						<img src="ERP/ventas/pages/<?php echo $datos[$i]['imagen'];?>"><br>
						<span ><?php echo $datos[$i]['nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['precio'];?></span><br>
						<span>Cantidad: 
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad" maxlength="2">
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['precio'];?></span><br>
						<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
					</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
			if($total!=0){
					echo '<center><a href="compras/compras.php" class="aceptar">Comprar</a></center>;';
			}
			
		?>
		<center><a href="carrito.php">Ver menu</a></center>
		
		
		

		
	</section>
</body>
</html>

<script type="text/javascript">
var inicio=function () {
	$(".eliminar").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.platillo').remove();
		$.post('./js/eliminar.php',{
			Id:id
		},function(a){
			
			if(a=='0'){
				location.href="./carritodecompras.php";
			}
		});

	});
}
$(document).on('ready',inicio);
</script>
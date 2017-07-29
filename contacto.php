<html lang="es">
<head>
</head>
<body>
	<header></header>
<?php
	if(!isset($_SESSION)){ 
	session_start(); 
	} 
	include("conexion.php"); 
	include("menu.php"); 
?>

<section class="ContentPage">
	<div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <?php if (isset($_SESSION['id_usuario'])){ ?><!-- start if -->
                	<?php  
                		@$tabla = $_SESSION['tabla'];
                		@$id = $_SESSION['id_usuario'];
                		if ($tabla=="clientes") {
                			$sql = "SELECT Nombre, img from clientes where idClientes ='$id';";
            				$result = $conecta->query($sql);
            				$row = $result->fetch_assoc();
                		}elseif ($tabla=="empleado") {
                			$sql = "SELECT Nombre, img from empleado where idEmpleado ='$id';";
            				$result = $conecta->query($sql);
            				$row = $result->fetch_assoc();
                		}
                	?>
                	<li><figure><a href="perfil.php"><img class="circle" src="<?php echo "".$row['img']; ?>" alt="UserImage"></a></figure></li>
            		<li><?php echo "".utf8_decode($row['Nombre']); ?></li>
            		<li><a href="logout.php" class="tooltipped waves-effect waves-light btn-flat" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
            	<?php }else{ ?><!-- end if -->
            		<li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
            		<li>Invitado</li>
            		<li><a href="login.php" class="tooltipped waves-effect waves-light btn-flat" data-position="bottom" data-delay="50" data-tooltip="Login"><i class="zmdi zmdi-power"></i></a></li>
            	<?php } ?><!-- end else -->
            </ul>
        </div>


    <div class="container">
	<div class="card-panel #9e9e9e grey">
	<div class="row">
		<!-- Divisor -->
		<center><div class="col s4 offset-s4"><img src="assets/img/logocolor.png" alt="" class="responsive-img"></div></center>
		<div class="col s12" align="center"><h3><span class="flow-text">Contacto | Ubicacación</span></h3></div>
		<!-- Mail -->
		<div class="col s1"><i class="zmdi zmdi-email zmdi-hc-3x"></i></div>
		<div class="col s5">informacion@elrecuerdo.mx</div>
		<!-- Horario -->
		<div class="col s1"><i class="zmdi zmdi-time zmdi-hc-3x"></i></div>
		<div class="col s5">Horario de atención: <br>Lun a Vie de: 10am a 3pm y de 4pm a 6pm</div>
		<!-- Divisor -->
		<div class="col s12"><br><br></div>
		<!-- Telefono -->
		<div class="col s1"><i class="zmdi zmdi-phone zmdi-hc-3x"></i></div>
		<div class="col s5">(222) 4 13 31 51</div>
		<!-- Telefono -->
		<div class="col s1"><i class="zmdi zmdi-phone-ring zmdi-hc-3x"></i></div>
		<div class="col s5">(222) 2 31 60 38 <br>(Oficina)</div>
		<!-- Divisor -->
		<div class="col s12"><br><br></div>
		<!-- Map -->
		<center>
		<div class="col s1"><i class="zmdi zmdi zmdi-pin zmdi-hc-2x"></i></div>
		<div class="col s11">Avenida San Felipe 2615-A, Colonia Villa Posadas, CP 72060 Puebla, Pue. Mex.</div>
		</center>
		<!-- Divisor -->
		<div class="col s12"><br><br></div>
		<!-- Google Maps -->
		<div class="col s12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8281.533664107266!2d-98.223843850113!3d19.069405150224707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc134f3b382cb%3A0x52e2ab387ad53b8!2sEl+Recuerdo!5e0!3m2!1ses-419!2smx!4v1468968905246" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	</div>
	</div>

</section>

	<script>
		$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
		$('.collapsible').collapsible({
			  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		$('.slider').slider({full_width: true});
			})
	  </script>
</body>
</html>
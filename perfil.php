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
	include("config.php");
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

	<?php
   		$cc=$_SESSION['id_usuario'];
		$sqlC=mysqli_query($conecta,"select * from clientes where idClientes='$cc';");
		while($a=mysqli_fetch_array($sqlC)){
			$usuarioc=$a['usuario'];
			$passwordc=$a['password'];
			$password2c=$a['accType'];
			$nombrec=$a['Nombre'];
			$apc=$a['Apaterno'];
			$amc=$a['Amaterno'];
			$imgc=$a['img'];
			$telc=$a['telefono'];
			$callec=$a['Calle'];
			$numc=$a['Numero'];
			$cpc=$a['CP'];
			$mailc=$a['Email'];
			$rfcc=$a['RFC'];
		}
	?>

    <form name="registrar" method="POST" enctype="multipart/form-data">
    <div class="container">
	<div class="card-panel #9e9e9e grey">
		<div class="col s12 center">
			<i class="zmdi zmdi-account-add zmdi-hc-2x prefix"></i> Datos de cuenta:
		</div>
	</div>
	<div class="row">
		<div class="col s12 center">
			<div class="row"></div>
			<img class="circle" src="<?php echo @$imgc;?>" width="150" height="150">
			<div class="row"></div>
		</div>
	</div>
	<div class="row">
		<div class="col s6 input-field">
			<i class="zmdi zmdi-account zmdi-hc-2x prefix"></i>
			<input disabled id="usuario" name="usuario" type="text" class="validate" required="required" value="<?php echo @$usuarioc;?>" />
            <label for="usuario">Nombre de Usuario:</label>
		</div>
	</div>
	
	<div class="card-panel #9e9e9e grey">
		<div class="col s12 center">
			<i class="zmdi zmdi-account-add zmdi-hc-2x prefix"></i> Datos Personales:
		</div>
	</div>
	<div class="row">
		<div class="col s4 input-field">
			<input disabled id="nombre" name="nombre" type="text" class="validate" required="required" value="<?php echo @$nombrec;?>" />
            <label for="nombre">Nombre:</label>
		</div>
		<div class="col s4 input-field">
			<input disabled id="ap" name="ap" type="text" class="validate" required="required" value="<?php echo @$apc;?>" />
            <label for="ap">Apellido Paterno:</label>
		</div>
		<div class="col s4 input-field">
			<input disabled id="am" name="am" type="text" class="validate" required="required" value="<?php echo @$amc;?>" />
            <label for="am">Apellido Materno:</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col s6 input-field offset-s3">
			<i class="zmdi zmdi-account-box-phone zmdi-hc-2x prefix"></i>
			<input disabled id="tel" name="tel" type="text" class="validate" required="required" value="<?php echo @$telc;?>" />
            <label for="tel">Telefono:</label>
		</div>
	</div>
	<div class="row">
		<div class="col s4 input-field">
			<input disabled id="calle" name="calle" type="text" class="validate" required="required" value="<?php echo @$callec;?>" />
            <label for="calle">Calle:</label>
		</div>
		<div class="col s4 input-field">
			<input disabled id="num" name="num" type="number" class="validate" required="required" value="<?php echo @$numc;?>" />
            <label for="num">Numero:</label>
		</div>
		<div class="col s4 input-field">
			<input disabled id="cp" name="cp" type="number" class="validate" required="required" value="<?php echo @$cpc;?>" />
            <label for="cp">Codigo Postal:</label>
		</div>
	</div>
	<div class="row">
		<div class="col s6 input-field">
			<i class="zmdi zmdi-email zmdi-hc-2x prefix"></i>
			<input disabled id="mail" name="mail" type="text" class="validate" required="required" value="<?php echo @$mailc;?>" />
            <label for="mail">E-mail:</label>
		</div>
		<div class="col s6 input-field">
			<i class="zmdi zmdi-account-box-o zmdi-hc-2x prefix"></i>
			<input disabled id="rfc" name="rfc" type="text" class="validate" required="required" value="<?php echo @$rfcc;?>" />
            <label for="rfc">RFC:</label>
		</div>
	</div>
	</div>
	<div class="card-panel #9e9e9e grey">
		<div class="col s12 center">
			<a href="index.php">Regresar</a>
		</div>
	</div>
	
	</form>

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

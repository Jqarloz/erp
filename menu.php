<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>El Recuerdo | Restaurant</title>
    
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="css/material-design-iconic-font.css">

    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    if(!isset($_SESSION)){ 
    session_start(); 
    } 
    include("conexion.php");
?>

    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                El Recuerdo <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="assets/img/logocolor.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">¡Nada mejor que regresar a casa!</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li class="NavLateralDivider"></li>
                        <li>
                            <a href="home.php" class="NavLateral-DropDown waves-effect waves-light"><i class="zmdi zmdi-home zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Bienvenida</a>
                            <ul class="full-width">
                                <li><a href="index.php" class="waves-effect waves-light">Inicio</a></li>
                                <li><a href="contacto.php" class="waves-effect waves-light">Contacto</a></li>
                            </ul>
                        </li>

                    <li class="NavLateralDivider"></li>
                        <li class="grey darken-2">
                            <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-cutlery zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Menú</a>
                            <ul class="full-width">
                                <li><a href="carrito.php" class="waves-effect waves-light">Ver Menú</a></li>
                            </ul>
                        </li>
                    <li class="NavLateralDivider"></li>
                        <li>
                            <a href="home.php" class="NavLateral-DropDown waves-effect waves-light"><i class="zmdi zmdi-face zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Cuenta</a>
                            <ul class="full-width">
                            <?php if (!isset($_SESSION['id_usuario'])){ ?>
                                <li><a href="login.php" class="waves-effect waves-light">Iniciar Sesión</a></li>
                                <li><a href="registrar.php" class="waves-effect waves-light">Registrarse</a></li>
                            <?php }else{ ?><!-- end if -->
                            <?php if ($_SESSION['tabla']=="clientes"){ ?>
                                <li><a href="perfil.php" class="waves-effect waves-light">Perfil</a></li>
                                <li><a href="editarPerfil.php" class="waves-effect waves-light">Editar Perfil</a></li>
                                <li><a href="ImprimirFactura.php" class="waves-effect waves-light">Factura de Compra</a></li>
                            <?php if ($_SESSION['encuesta']==0){ ?>
                                <li><a href="encuesta.php" class="waves-effect waves-light">Encuesta de Servicio</a></li>
                            <?php }}} ?>
                            </ul>
                        </li>
                    <li class="NavLateralDivider"></li>
                    <?php if (@$_SESSION['tabla']=="empleado"){?>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>ERP</a>
                        <ul class="full-width">
                            <li><a href="ERP/index.php" class="waves-effect waves-light">Ver Todo</a></li>
                        </ul>
                    </li> 
                    <?php  }?>
                </ul>
            </div>  
        </div>  
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
	
	  <script>
		$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
        $('select').material_select();
		$('.collapsible').collapsible({
			  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		$('.slider').slider({full_width: true});
			})
	  </script>
</body>
</html>
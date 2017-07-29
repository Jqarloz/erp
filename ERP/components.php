<?php 
  if(!isset($_SESSION)){ 
    session_start(); 
  }
  include("../conexion.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    
</head>
<body>

<!-- NAV BAR -->
<!-- Dropdown Structure -->
<section>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="con_fin/index.php">Contabilidad y Finanzas</a></li>
  <li class="divider"></li>
  <li><a href="Recursos_humanos/index.php">Recursos Humanos</a></li>
  <li class="divider"></li>
  <li><a href="Inventario_Almacen/index2.php">Almacén</a></li>
  <li class="divider"></li>
  <li><a href="Inventario_Almacen/index.php">Inventario</a></li>
  <li class="divider"></li>
  <li><a href="compras/index.php">Compras</a></li>
  <li class="divider"></li>
  <li><a href="ventas/index.php">Ventas</a></li>
  <li class="divider"></li>
  <li><a href="CRM/index.php">CRM</a></li>
</ul>
<div class="navbar-fixed">
<nav>
<div class="nav-wrapper blue-grey darken-3">
  <a href="#!" class="brand-logo right">ERP<img class="circle responsive-img" src="../assets/img/logo.png" width="40" height="40"></a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="left hide-on-med-and-down">
    <li>
    	<a class="dropdown-button" href="#!" data-activates="dropdown1">
    		Modulos<i class="material-icons right">arrow_drop_down</i>
    	</a>
    </li>
    <li>
      <a href="../index.php">
        <i class="small material-icons left">home</i>Restaurante
      </a>
    </li>
    <?php
      @$id = $_SESSION['id_usuario'];  
      $sql = "SELECT Nombre, img from empleado where idEmpleado ='$id';";
      $result = $conecta->query($sql);
      $row = $result->fetch_assoc();

      $idType = $_SESSION['accType'];
      $sql2 = "SELECT Tipo from acctipo where id ='$idType';";
      $NomTipo = $conecta->query($sql2);
      $row2 = $NomTipo->fetch_assoc();
    ?>
    <li>
      <a href="#!"><img class="circle responsive-img" src="../<?php echo "".$row['img']; ?>" width="40" height="40"><?php echo "".utf8_decode($row['Nombre']); ?></a>
    </li>
    <li><a href="#!" class="waves-effect waves-light btn"><?php echo "".utf8_decode($row2['Tipo']); ?></a></li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
  <li>
    <a href="../index.php">
      <i class="small material-icons left">home</i>Restaurante
    </a>
  </li>
  <li class="divider"></li>
  <li><a href="con_fin/index.php">Contabilidad/Finanzas</a></li>
	<li><a href="Recursos_humanos/index.php">Recursos Humanos</a></li>
	<li><a href="Inventario_Almacen/index.php2">Almacén</a></li>
  <li><a href="Inventario_Almacen/index.php">Inventarios</a></li>
	<li><a href="compras/index.php">Compras</a></li>
	<li><a href="ventas/index.php">Ventas</a></li>
	<li><a href="CRM/index.php">CRM</a></li>
  </ul>
</div>
</nav>
</div>
</section>
<!-- END NAV BAR -->

<!-- Cuerpo -->






<!-- END Cuerpo -->


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
$(".dropdown-button").dropdown();

$('.collapsible').collapsible({
	  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	});
$('.slider').slider({full_width: true});
	})
</script>
</body>
</html>
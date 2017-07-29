<?php 
  if(!isset($_SESSION)){ 
    session_start(); 
  }
  include("../../conexion.php");  
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
  <li><a href="pages/balanceCompras.php">Balance de Compra</a></li>
  <li class="divider"></li>
  <li><a href="pages/balanceVentas.php">Balance de Venta</a></li>
  <li class="divider"></li>
  <li><a href="pages/balanceServicios.php">Balance de Servicios</a></li>
  <li class="divider"></li>
  <li><a href="pages/Caja.php">Caja</a></li>
  <li class="divider"></li>
  <li><a href="pages/reporteCaja.php">Reporte de Caja</a></li>
  <li class="divider"></li>
  <li><a href="pages/RealizarPagoE.php">Pago a Empleados</a></li>
  <li class="divider"></li>
  <li><a href="pages/VisualizarPagoEmpleado.php">Buscar Pago a Empleados</a></li>
  <li class="divider"></li>
  <li><a href="pages/PagoProveedor.php">Pago Proveedor</a></li>
  <li class="divider"></li>
  <li><a href="pages/PagoServicio.php">Pago de Servicios</a></li>
  <li class="divider"></li>
  <li><a href="pages/VisualizarFacturaCliente.php">Factura Cliente</a></li>
  <li class="divider"></li>
</ul>
<div class="navbar-fixed">
<nav>
<div class="nav-wrapper red lighten-2">
  <a href="#" class="brand-logo right">Contabilidad y Finanzas <img class="circle responsive-img" src="../img/01.jpg" width="40" height="40"></a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="left hide-on-med-and-down">
    <li>
    	<a class="dropdown-button" href="#!" data-activates="dropdown1">
    		Procesos<i class="material-icons right">arrow_drop_down</i>
    	</a>
    </li>
    <li>
      <a href="../index.php">
        <i class="small material-icons left">home</i>Inicio
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
      <a href="#!"><img class="circle responsive-img" src="../../<?php echo "".$row['img']; ?>" width="40" height="40"><?php echo "".utf8_decode($row['Nombre']); ?></a>
    </li>
    <li><a href="#!" class="waves-effect waves-light btn"><?php echo "".utf8_decode($row2['Tipo']); ?></a></li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
  <li>
    <a href="../index.php">
      <i class="small material-icons left">home</i>Inicio
    </a>
  </li>
  <li class="divider"></li>
  <li><a href="pages/balanceCompras.php">Balance de Compra</a></li>
  <li class="divider"></li>
  <li><a href="pages/balanceVentas.php">Balance de Venta</a></li>
  <li class="divider"></li>
  <li><a href="pages/balanceServicios.php">Balance de Servicios</a></li>
  <li class="divider"></li>
  <li><a href="pages/Caja.php">Caja</a></li>
  <li class="divider"></li>
  <li><a href="pages/reporteCaja.php">Reporte de Caja</a></li>
  <li class="divider"></li>
  <li><a href="pages/RealizarPagoE.php">Pago a Empleados</a></li>
  <li class="divider"></li>
  <li><a href="pages/VisualizarPagoEmpleado.php">Buscar Pago</a></li>
  <li class="divider"></li>
  <li><a href="pages/PagoProveedor.php">Pago Proveedor</a></li>
  <li class="divider"></li>
  <li><a href="pages/PagoServicio.php">Pago de Servicios</a></li>
  <li class="divider"></li>
  <li><a href="pages/VisualizarFacturaCliente.php">Factura Cliente</a></li>
  <li class="divider"></li>
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
$('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd'    
    });
$('.parallax').parallax();
$('.modal-trigger').modal();
$(".dropdown-button").dropdown();
$('select').material_select();

$('.collapsible').collapsible({
	  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	});
$('.slider').slider({full_width: true});
	})
</script>
</body>
</html>
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
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAV BAR -->
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Contabilidad y Finanzas</a></li>
  <li class="divider"></li>
  <li><a href="#!">Recursos Humanos</a></li>
  <li class="divider"></li>
  <li><a href="#!">Inventarios</a></li>
  <li class="divider"></li>
  <li><a href="#!">Almacén</a></li>
  <li class="divider"></li>
  <li><a href="#!">Compras</a></li>
  <li class="divider"></li>
  <li><a href="#!">Ventas</a></li>
  <li class="divider"></li>
  <li><a href="#!">CRM</a></li>
</ul>
<nav>
<div class="nav-wrapper blue-grey darken-3">
  <a href="#!" class="brand-logo center">ERP</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="left hide-on-med-and-down">
    <li>
    	<a class="dropdown-button" href="#!" data-activates="dropdown1">
    		Modulos<i class="material-icons right">arrow_drop_down</i>
    	</a>
    </li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
    <li><a href="#!">Almacen e Inentario</a></li>
	<li><a href="#!">Recursos Humanos</a></li>
	<li><a href="#!">Inventarios</a></li>
	<li><a href="#!">Almacén</a></li>
	<li><a href="#!">Compras</a></li>
	<li><a href="#!">Ventas</a></li>
	<li><a href="#!">CRM</a></li>
  </ul>
</div>
</nav>

<!-- END NAV BAR -->

<!-- Cuerpo -->


<?php include("index.php"); ?>






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
$('.parallax').parallax();
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
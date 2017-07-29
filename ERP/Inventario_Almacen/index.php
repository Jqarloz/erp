<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERP 8° "C"</title>
</head>
<body><center>

<!-- Que nunca Falte!!! -->
<?php 
if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
if($_SESSION['accType']!= 70 && $_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo de Inventario ")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
include("../../conexion.php");
include("components.php"); 
?><!-- ok -->
<!-- PARALLAX -->
<center><main>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider7.jpg"></div>
</div>
<div class="section green lighten-4">
  <div class="row container">
    <div class="row">
      <!-- Card Caja -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/01.jpg" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Consulta de <br>inventario<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Consulta<i class="material-icons right">close</i></span>
              <p>En este apartado podra revisar los productos que se tienen en almacen...</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/VInventario.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/03.jpg" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Agregar datos a <br> Inventario <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Ingreso de datos<i class="material-icons right">close</i></span>
              <p>En este proceso podremos ingresar la informacion al inventario para llevar el control de nuestros productos</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/Invetario-1.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
            </div>
          </div>
      </div>
      <!-- END Pago A Empleados -->
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider8.jpg"></div>
</div>
</main></center>
<!-- end PARALLAX -->


<script>
$(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

</center></body>
</html>
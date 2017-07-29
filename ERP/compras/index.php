<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERP 8° "C"</title>
</head>
<body>

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
if($_SESSION['accType']!= 40 && $_SESSION['accType'] != 100){
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo de Compras ")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
include("../../conexion.php");
include("components-compras.php"); 
?>
<!-- ok -->
<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider5.jpg"></div>
</div>
<div class="section blue-grey darken-3">
  <div class="row container">
    <div class="row">
      <!-- Card Caja -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/01.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Compras<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Compras<i class="material-icons right">close</i></span>
              <p>En este proceso.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/consulta-pedidos.php" class="waves-effect waves-light btn teal darken-3">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/02.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Proveedores<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Proveedores<i class="material-icons right">close</i></span>
              <p>En este proceso.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/consulta-proveedores.php" class="waves-effect waves-light btn teal darken-3">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/03.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Materia Prima<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Materia Prima<i class="material-icons right">close</i></span>
              <p>En este proceso.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/consulta-materiaprima.php" class="waves-effect waves-light btn teal darken-3">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider6.jpg"></div>
</div>
</main>
<!-- end PARALLAX -->


<script>
$(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERP 8° "C"</title>
</head>
<body>

<!-- Que nunca Falte!!! -->
<!-- Index -->
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
if($_SESSION['accType']!= 60 && $_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo de Almacen ")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
include("../../conexion.php");
include("components2.php"); 
?>
<!-- ok -->

<!-- ok -->
<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider6.jpg"></div>
</div>
<div class="section blue-grey darken-3">
  <div class="row container">
    <div class="row">
      <!-- Card Caja -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/rechazo.png" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Formato de <br>rechazo <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Formato de rechazo<i class="material-icons right">close</i></span>
              <p>En este apartado podra imprimir un formato para la devolucion de algun producto en mal estado...</p>
            </div>
            <div class="card-action">
              <center><p><a href="demo.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/imprimir.jpg" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Impresion de <br> Ticket <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Impresion de ticket's<i class="material-icons right">close</i></span>
              <p>En este proceso podremos hacer las impresiones pertinentes para la organizacion de el almacen</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/demo.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
      <!-- Card Pago A Empleados -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/usuarios.gif" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Ingresar información a <br> Almacen <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">ingreso a Almacen<i class="material-icons right">close</i></span>
              <p>En este proceso se llevara acabo la inserción de datos para almacenar, modificar y eliminar si fuera necesario</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/almacen.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago A Empleados -->
      
      <!-- Card Pago A Empleados -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/REQUISICION.png" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Fromato de  <br> Requisición <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Formato de Requisición<i class="material-icons right">close</i></span>
              <p>Se imprimira un formato para recibir los productos necesarion para la organización</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/requisicion.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago A Empleados -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/envio.png" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Enviar  <br> Peticiones <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Enviar formatos<i class="material-icons right">close</i></span>
              <p>En este proceso podremos enviar los formatos de rechazo y peticion para su autorizacion...</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/Destino.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/solicitud.png" width="70" height="150">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Revisar solicitud<br> de compras<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Solicitudes<i class="material-icons right">close</i></span>
              <p>Aqui podremos consultar  las solictudes para obtener la solicitud que se va a rechazar</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/consulta-pedidos.php" class="waves-effect waves-light btn light-blue darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider8.jpg"></div>
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
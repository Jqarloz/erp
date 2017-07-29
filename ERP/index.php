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
if($_SESSION['accType']== 0){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
include("../conexion.php");
include("components.php"); 
?>
<!-- ok -->
<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="img/slider4.jpg"></div>
</div>
<div class="section blue-grey darken-1">
  <div class="row container">
    <div class="row">
      <!-- Card Contabilidad y Finanzas -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/01.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Contabilidad <br>y Finanzas<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Contabilidad y Finanzas<i class="material-icons right">close</i></span>
              <p>Este modulo tiene como finalidad registrar y procesar las transacciones que se generen en el restaurante:
• Consultar ventas
• Consultar compras
• Hacer reporte de pagos a personal
• Hacer reporte de pagos a proveedores
• Reporte de ganancias (día, mes, años)
• Creación de facturas para clientes y proveedores.
• Reporte de movimientos bancarios.
</p>
            </div>
            <div class="card-action">
              <center><p><a href="con_fin/index.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Card Contabilidad y Finanzas -->
      <!-- Card Recursos Humanos -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/02.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Recursos <br>Humanos<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Recursos Humanos<i class="material-icons right">close</i></span>
              <p>En este modulo se registra los datos de que necesita contabilidad y finanzas. Maneja datos de los trabajadores, asistencias y horarios de los empleados. Actualización, registro y eliminación de los empleados.
</p>
            </div>
            <div class="card-action">
              <center><p><a href="Recursos_humanos/index.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Recursos Humanos -->
      <!-- Card Compras -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/03.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Compras <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Compras<i class="material-icons right">close</i></span>
              <p>En este modulo tiene la finalidad de obtener o adquirir, a cambio de un precio determinado, un producto o un servicio.</p>
            </div>
            <div class="card-action">
              <center><p><a href="compras/index.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Compras -->
      <!-- Card Ventas -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/04.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Ventas <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Ventas<i class="material-icons right">close</i></span>
              <p>En este modulo se obtentra la detección de las  necesidades y carencias de nuestros  clientes.</p>
            </div>
            <div class="card-action">
              <center><p><a href="ventas/index.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Ventas -->
      <!-- Card Almacén -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/05.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Almacén <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Almacén<i class="material-icons right">close</i></span>
              <p>En este modulo.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="Inventario_Almacen/index2.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Almacén -->
      <!-- Card Inventarios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/05.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Inventarios<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Inventarios<i class="material-icons right">close</i></span>
              <p>En este modulo.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="Inventario_Almacen/index.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Inventarios -->
      <!-- Card CRM -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="250" height="250" src="img/06.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>CRM <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">CRM<i class="material-icons right">close</i></span>
              <p>En este modulo se muestra apoyo a la gestión de las relaciones con los clientes, a la venta y al marketing, maneja la satisfacción de los clientes hacia el producto y servicio.</p>
            </div>
            <div class="card-action">
              <center><p><a href="CRM/index.php" class="waves-effect waves-light btn brown darken-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END CRM -->
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="img/slider2.jpg"></div>
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
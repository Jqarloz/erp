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
include("components.php");
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 

if($_SESSION['accType']!= 10 && $_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo contabilidad y finanzas")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
?>
<!-- ok -->


<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider2.jpg"></div>
</div>
<div class="section blue-grey darken-3"">
  <div class="row container">
    <div class="row">
  <!-- Recursos Economicos -->
      <!-- Card Balance de Compra -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/01.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Balance de<br> Compra<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Balance de Compra<i class="material-icons right">close</i></span>
              <p><h5><li>Es un instrumento financiero que se utiliza para visualizar la lista del total de los debitos y de los créditos de las cuentas, junto al saldo de cada una de ellas </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/balanceCompras.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Balance de Compra -->
      <!-- Card Balance de Venta-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/02.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Balance de<br> Ventas<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Balance de Ventas<i class="material-icons right">close</i></span>
              <p><h5><li>Una hoja de balance informa de los activos, pasivos y patrimonio de una empresa en un momento determinado en el tiempo. </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/balanceVentas.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Balance de Venta-->
      <!-- Card Balance de Servicios-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/03.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Balance de<br> Servicios<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Balance de Servicios<i class="material-icons right">close</i></span>
              <p><h5><li>Una hoja de balance informa de los servicios pagados por la empresa en un momento determinado en el tiempo. </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/balanceServicios.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Balance de Venta-->
  <!-- end Recursos Economicos -->
  <!-- Caja procesos -->
      <!-- Card Caja -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/04.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Caja<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><b>Caja</b><i class="material-icons right">close</i></span>
              <p><h5><li>Controla los cortes de caja, indicando el saldo al inicio del día, las ventas y el saldo final al corte</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/Caja.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja -->
      <!-- Card Caja reportes -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/05.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Reportes de<br>Caja<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><b>Reportes de Caja</b><i class="material-icons right">close</i></span>
              <p><h5><li>Controla los cortes de caja, indicando el saldo al inicio del día, las ventas y el saldo final al corte</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/reporteCaja.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja reportes -->
  <!-- end caja procesos -->
  <!-- procesos Nomina -->
      <!-- Card Pago A Empleados -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/06.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago a<br> Empleados<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago a Empleados<i class="material-icons right">close</i></span>
              <p><h5><li>La nomina es la suma de todos los registros financieros de los sueldos de los empleados, incluyendo los salarios, las bonificaciones y las deducciones. En la contabilidad, la nómina se refiere a la cantidad pagada a los empleados por los servicios que prestaron durante un cierto período de tiempo.</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/BuscarEmpleado.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago A Empleados -->
      <!-- Card Imprimir Pago -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/06.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Buscar pago <br>de Empleado<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Buscar pago de Empleado<i class="material-icons right">close</i></span>
              <p><h5><li>Permite vizualizar el pago del empleado por una fecha determinada</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/VisualizarPagoEmpleado.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Imprimir Pago -->
  <!-- end procesos Nomina -->
  <!-- Control de Pagos -->
      <!-- Card pago servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/07.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago de<br> Servicios<i class="material-icons right">more_vert</i></span></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago de Servicios<i class="material-icons right">close</i></span>
              <p><h5><li>Son pagos de facturas de servicios públicos y privados y recarga en línea de servicios prepagados. Mejoramiento de los controles financieros por la eficiencia y confianza del mecanismo de proceso de la información.</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/pagoServicio.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END pago servicios -->
      <!-- Card Pago Proveedor-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/08.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago<br> Proveedor<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago Proveedor<i class="material-icons right">close</i></span>
              <p><h5><li>Una hoja de balance informa de los activos, pasivos y patrimonio de una empresa en un momento determinado en el tiempo. </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/PagoProveedor.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago Proveedor-->
  <!-- end Control de Pagos -->
  <!-- Facturacion -->
      <!-- Card Factura Cliente -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/09.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Factura Cliente<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Factura Cliente<i class="material-icons right">close</i></span>
               <p><h5><li>Una factura es un documento de carácter mercantil que indica una compraventa de un bien o servicio y, además, incluye toda la información de la operación.</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/VisualizarFacturaCliente.php" class="waves-effect waves-light btn red lighten-2">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Factura Cliente -->
  <!-- end Facturacion -->    
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="../../assets/img/slider1.jpg"></div>
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
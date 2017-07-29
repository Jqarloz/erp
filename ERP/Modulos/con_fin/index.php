<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERP 8° "C"</title>
</head>
<body>

<!-- Que nunca Falte!!! -->
<?php include("components.html"); ?>
<!-- ok -->
<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img width="70" height="150" src="img/slider3.jpg"></div>
</div>
<div class="section green lighten-4">
  <div class="row container">
    <div class="row">
      <!-- Card Empleados -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card10.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Caja<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><b>Caja</b><i class="material-icons right">close</i></span>
              <p><h5><li>Controla los cortes de caja, indicando el saldo al inicio del día, las ventas y el saldo final al corte</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/Caja.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Empleados -->
      <!-- Card Caja -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card15.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago de<br> Servicios</b><i class="material-icons right">more_vert</i></span><h5></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago de Servicios<i class="material-icons right">close</i></span>
              <p><h5><li>Son pagos de facturas de servicios públicos y privados y recarga en línea de servicios prepagados. Mejoramiento de los controles financieros por la eficiencia y confianza del mecanismo de proceso de la información.</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/pagoServicio.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja -->
      <!-- Card Imprimir Pago -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card20.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Buscar pago <br>de Empleado</br><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Buscar pago de Empleado<i class="material-icons right">close</i></span>
              <p><h5><li>Permite vizualizar el pago del empleado por una fecha determinada</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/VisualizarPagoEmpleado.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Imprimir Pago -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card14.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Factura Cliente</br><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Factura Cliente<i class="material-icons right">close</i></span>
               <p><h5><li>Una factura es un documento de carácter mercantil que indica una compraventa de un bien o servicio y, además, incluye toda la información de la operación.</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/VisualizarFacturaCliente.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
      <!-- Card Pago Proveedor-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card21.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago<br> Proveedor</br><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago Proveedor<i class="material-icons right">close</i></span>
              <p><h5><li>Una hoja de balance informa de los activos, pasivos y patrimonio de una empresa en un momento determinado en el tiempo. </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/PagoProveedor.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago Proveedor-->
      <!-- Card Pago A Empleados -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card19.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago a<br> Empleados</br><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago a Empleados<i class="material-icons right">close</i></span>
              <p><h5><li>La nomina es la suma de todos los registros financieros de los sueldos de los empleados, incluyendo los salarios, las bonificaciones y las deducciones. En la contabilidad, la nómina se refiere a la cantidad pagada a los empleados por los servicios que prestaron durante un cierto período de tiempo.</li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/RealizarPagoE.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago A Empleados -->
      <!-- Card Balance de Compra -->
      <div class="col s4">
          <div class="card sticky-actio n">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card18.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Balance de<br> Compra</br><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Balance de Compra<i class="material-icons right">close</i></span>
              <p><h5><li>Es un instrumento financiero que se utiliza para visualizar la lista del total de los debitos y de los créditos de las cuentas, junto al saldo de cada una de ellas </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/balanceCompras.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Balance de Compra -->
      <!-- Card Balance de Venta-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" width="70" height="150" src="img/card21.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Balance de<br> Ventas</br><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Balance de Ventas<i class="material-icons right">close</i></span>
              <p><h5><li>Una hoja de balance informa de los activos, pasivos y patrimonio de una empresa en un momento determinado en el tiempo. </li></h5></p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/balanceVentas.php">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Balance de Venta-->
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
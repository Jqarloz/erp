<!-- Que nunca Falte!!! -->
<!-- procesos -->
<?php 
include("../../../config.php"); 
include("components.php"); 
include("../../../conexion.php");

if(!isset($_SESSION)){ 
  session_start(); 
} 
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
<div class="container center">

<div class="col s12 center"><h5> Balance de Servicios </h5></div>
<form method="POST" >
	<div class="row">
	<div class="col s2 center offset-s4"> De (fecha): </div>
	<div class="col s2"> <input type="date" name="fechaI" value="" class="datepicker"> </div>
	<div class="col s2 center offset-s4"> Hasta (fecha): </div>
	<div class="col s2"> <input type="date" name="fechaF" value="" class="datepicker"> </div>
	</div>
	<div class="row">
		<div class="col s2 offset-s5"> <input type="submit" name="Buscar" value="Buscar" class="waves-effect waves-light btn"> </div>
	</div>
</form>
<?php
@$FechaI = $_POST['fechaI'];
@$FechaF = $_POST['fechaF'];
?>

<div class="col s12 center">
  <?php
  if ($FechaI != 0) {
    $sumaserv=mysqli_query($conecta,"SELECT SUM(TotalPago) as total FROM pagoservicio WHERE FechaInicio>='$FechaI' and FechaInicio<='$FechaF';");
    $row2 = mysqli_fetch_assoc($sumaserv);
    echo "<div class='col s12 center h5'>";
    echo "Total de pagos realizados a Servicios de <b>".$FechaI."</b> a <b>".$FechaF."</b>.";
    echo "</div>";
    echo "<b><h4> $ ".$row2['total']."</b></h4>";
  }
    
  ?>
</div>	
</div>


<table class="responsive-table striped centered">
<thead>
  <tr>
      <th data-field="id">ID</th>
      <th data-field="moto">Monto</th>
      <th data-field="fecha">Fecha</th>
      <th data-field="serv">Servicio</th>
      <th data-field="desc">Descripción</th>
  </tr>
</thead>

<tbody>
<?php
$pagoservicio=mysqli_query($conecta,"select * from pagoservicio where FechaInicio>='$FechaI' and FechaInicio<='$FechaF';");
while ($a=mysqli_fetch_array($pagoservicio)){
    echo "<tr>";
    echo "<td>".$a['idPagoServicio']."</td>";
    echo "<td>$".$a['TotalPago']."</td>";
    echo "<td>".$a['FechaInicio']."</td>";
    $servicio=mysqli_query($conecta,"select * from servicios where idServicios='".$a['Servicios_idServicios']."';");
    while ($s1=mysqli_fetch_array($servicio)){
      echo "<td>".$s1['TipoServicio']."</td>";
    }
    echo "<td>".$a['Descipcion']."</td>";
    echo "</tr>";
  }
?>  
</tbody>

</table>


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

<div class="col s12 center"><h5> Reporte de Caja </h5></div>
<form method="POST" >
	<div class="row">
	<div class="col s2 center offset-s4"> Fecha especifica: </div>
	<div class="col s2"> <input type="date" name="fechaF" value="" class="datepicker"> </div>
	</div>
	<div class="row">
		<div class="col s2 offset-s5"> <input type="submit" name="Buscar" value="Buscar" class="waves-effect waves-light btn"> </div>
	</div>
</form>
</div>	
</div>


<table class="responsive-table striped centered">
<thead>
  <tr>
      <th data-field="fecha">Fecha</th>
      <th data-field="inicual">Cantidad Inicial</th>
      <th data-field="final">Cantidad Final del Dia</th>
      <th data-field="Eliminar">Eliminar</th>
  </tr>
</thead>

<tbody>
<?php
  
@$FechaF = $_POST['fechaF'];

if (isset($FechaF)) {
$caja=mysqli_query($conecta,"select * from caja where Fecha='$FechaF';");
while ($a=mysqli_fetch_array($caja)){
    echo "<tr>";
    echo "<td>".$a['Fecha']."</td>";
    echo "<td>$ ".$a['CantidadInicial']."</td>";
    echo "<td>$ ".$a['CantidadTotal']."</td>";
    echo "<td><a href='deleteCaja.php?id=".$a['idCaja']."'>Eliminar</a></td>";
    echo "</tr>";
  }
}else {
  $caja=mysqli_query($conecta,"select * from caja;");
  while ($a=mysqli_fetch_array($caja)){
    echo "<tr>";
    echo "<td>".$a['Fecha']."</td>";
    echo "<td>$ ".$a['CantidadInicial']."</td>";
    echo "<td>$ ".$a['CantidadTotal']."</td>";
    echo "<td><a href='deleteCaja.php?id=".$a['idCaja']."'>Eliminar</a></td>";
    echo "</tr>";
  }
}

?>  
</tbody>

</table>


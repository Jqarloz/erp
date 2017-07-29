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

<div class="col s12 center"><h5> Balance de Compras </h5></div>
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
    @$sumacompras=mysqli_query($conecta,"SELECT SUM(Total) as total FROM compras WHERE fecha>='$FechaI' and fecha<='$FechaF';");
    @$row2 = mysqli_fetch_assoc($sumacompras);
    echo "<div class='col s12 center h5'>";
    echo "Total de compras realizadas de <b>".$FechaI."</b> a <b>".$FechaF."</b>.";
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
      <th data-field="proveedor">Proveedor</th>
  </tr>
</thead>

<tbody>
<?php
@$compras=mysqli_query($conecta,"select * from compras where fecha>='$FechaI' and fecha<='$FechaF';");
while (@$a=mysqli_fetch_array($compras)){
    echo "<tr>";
    echo "<td>".$a['idCompras']."</td>";
    echo "<td>$".$a['Total']."</td>";
    echo "<td>".$a['fecha']."</td>";
    $provee1=mysqli_query($conecta,"select * from pedidopreveedor where idPedidoPreveedor='".$a['idPedidoPreveedor']."';");
    while ($p1=mysqli_fetch_array($provee1)){
      $provee2=mysqli_query($conecta,"select * from proveedores where idProveedores='".$p1['idProveedores']."';");
      while ($p2=mysqli_fetch_array($provee2)){
        echo "<td>".$p2['Nombre']."</td>";
      }
    }
    echo "</tr>";
  }
?>  
</tbody>

</table>
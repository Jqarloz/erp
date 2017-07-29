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

  <!-- Inserta Modal -->
  <div id="del" class="modal modal-trigger">
    <div class="modal-content">
      <h4>Corte de caja realizado</h4>
      <p>Los datos han sido eliminados correctamente en la base de datos del ERP.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Listo</a>
    </div>
  </div>
  <!-- NoInserta Modal -->
  <div id="nodel" class="modal modal-trigger">
    <div class="modal-content">
      <h4>Datos no eliminados</h4>
      <p>Algo ha fallado a la hora de eliminar el corte de caja. Intente nuevamente.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendido</a>
    </div>
  </div>

<div class="container center">

<div class="col s12 center"><h5> Eliminar Reporte de Caja </h5></div>
<form method="POST" >

<?php
  $id=$_GET['id'];
  $delete=mysqli_query($conecta,"select * from caja where idCaja='".$id."';");
  while($a=mysqli_fetch_array($delete)){
    $idcaja=$a['idCaja'];
    $fecha=$a['Fecha'];
    $in=$a['CantidadInicial'];
    $fin=$a['CantidadTotal'];      
  }
  
?>

	<div class="row">
  	<div class="col s2 center offset-s4"> ID Caja: </div>
  	<div class="col s2"> <input name="id" value="<?php echo $idcaja; ?>"> </div>
	</div>
	<div class="row">
		<div class="col s2 center offset-s4"> Fecha: </div>
    <div class="col s2"> <input name="fecha" value="<?php echo $fecha; ?>"> </div>
	</div>
  <div class="row">
    <div class="col s2 center offset-s4"> Cantidad Inicial: </div>
    <div class="col s2"> <input name="ci" value="<?php echo $in; ?>"> </div>
  </div>
  <div class="row">
    <div class="col s2 center offset-s4"> Cantidad Final: </div>
    <div class="col s2"> <input name="cf" value="<?php echo $fin; ?>"> </div>
  </div>
  <div class="row">
    <div class="col s4 center offset-s4">
    <input type="submit" name="eliminar" value="Eliminar" class="waves-effect waves-light btn red"/>
    </div>
  </div>
</form>
</div>

<?php
  @$i=$_POST['id'];
  @$j=$_POST['fecha'];
  @$k=$_POST['ci'];
  @$l=$_POST['cf'];
  
  
  if(isset($i) and isset($j) and isset($k)  and isset($l))
     {
      $eliminar=mysqli_query($conecta,"delete from caja  where idCaja='$id'");
     
        if($eliminar){
          echo '<center><a class="waves-effect waves-light btn modal-trigger blue" href="#del">¡Corte Eliminado!</a></center>';
          echo '<meta http-equiv="Refresh" content="5;URL=reporteCaja.php">';
        }
        else{
          echo '<center><a class="waves-effect waves-light btn modal-trigger red" href="#nodel">¡Error al eliminar!</a></center>';
          echo '<meta http-equiv="Refresh" content="5;URL=reporteCaja.php">';
        }
      
     
     }
     
?>
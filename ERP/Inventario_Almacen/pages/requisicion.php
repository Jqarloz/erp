<?php 
include("components2.php"); 

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
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Almacen")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>

<?php 	
	@$usuario = "SELECT * FROM requisicion";	
	@$requisicion=$mysqli->query($usuario);
	
if(isset($_POST['create_pdf'])){
require_once('tcpdf/tcpdf.php');

    ob_start();
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	
	
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
	
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
       	
      <table border="1" cellpadding="5">
        <thead>
          <tr>
		    <th>idMateriaPrima</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Unidad</th>
            <th>Cantidad</th>
            <th>Urgencia</th>
            
          </tr>
        </thead>
	';
	
	
	while ($user=$requisicion->fetch_assoc()) { 
			{  $color= '#f5f5f5'; } 
	$content .= '
		<tr bgcolor="'.$color.'">
		    <td>'.$user['idMateriaPrima'].'</td>
            <td>'.$user['Nombre'].'</td>
            <td>'.$user['Categoria'].'</td>
            <td>'.$user['Unidad'].'</td>
            <td>'.$user['Cantidad'].'</td>
            <td>'.$user['Urgencia'].'</td>
            
        </tr>
	';
	}
	
	$content .= '</table>';
	
	$content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	
            </div>
        </div>
    	
	';
	
	$pdf->writeHTML($content, true, 0, true, 0);
	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}

?>
		 
          
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Requisicion</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12">
            	<?php $h1 = ".../Formato de requisicion";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
        </div>
    	<div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>idMateriaPrima</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Unidad</th>
            <th>Cantidad</th>
            <th>Urgencia</th>
          </tr>
        </thead>
        <tbody>
        
        
        
        
        <?php 
			while ($user=$requisicion->fetch_assoc()) {?>
          <tr class="<?php ?>">
            <td><?php echo $user['idMateriaPrima']; ?></td>
            <td><?php echo $user['Nombre']; ?></td>
            <td><?php echo $user['Categoria']; ?></td>
            <td><?php echo $user['Unidad']; ?></td>
            <td><?php echo $user['Cantidad']; ?></td>
            <td><?php echo $user['Urgencia']; ?></td>
          </tr>
         <?php }?>
        </tbody>
      </table>
              <div class="col-md-12">
              	<form method="post">
                	<input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                	<input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
                
                 <div class="col-md-8">
              	<form method="post">
                	
                	
                	
                	<input type="button" name="create_pdf" class="btn btn-danger pull-right" value="Eliminar registro"onclick="javascript:window.location='eliminarq.php';"/> 
                </form>
                
                
                 <div class="col-md-3">
              	<form method="post">
                <input type="button" name="guardar" class="btn btn-danger pull-right" value="Agregar registro"onclick="javascript:window.location='registroreq.php';"/> 
                </form>
              </div>
      	</div>
    </div>
</body>
</html>
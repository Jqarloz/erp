<html>
<head>
<?php 
include("../../../config.php"); 
include("../components2.html"); 
include("conexion.php");

if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del Restaurante")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
} 
if($_SESSION['accType']!= 60 ||$_SESSION['accType']!= 100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Almacen")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}  
?>
  <title>registro</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>Nuevo registro</h1></center>
  	<form method="POST" action="registroreq.php" >

<form name= "inicio" method ="post">

    
    
    
   <div class="form-group">
	    <label>idMateriaPrima</label>
	    <input type="number" name="idMateriaPrima" class="form-control"> 
	</div>

	<div class="form-group">
	    <label>Nombre </label>
	    <input type="text" name="Nombre" class="form-control">
	</div>

   <div class="form-group">
	    <label>Categoria </label>
	    <input type="text" name="Categoria" class="form-control">
	</div>

	<div class="form-group">
	    <label>Unidad </label>
	    <input type="text" name="Unidad" class="form-control">
	</div>
    
    <div class="form-group">
	    <label>Cantidad </label>
	    <input type="number" name="Cantidad" class="form-control">
	</div>
    
    <div class="form-group">
	    <label>Urgencia </label>
	    <input type="text" name="Urgencia" class="form-control">
	</div>
    
    <center><input type="submit" name="Enviar" class="btn btn-success"></center>
    


  </form>
</body>
  
  
  <?php
  	
	
	
  	
  		//include("conexion.php");
        @$idm=$_POST['idMateriaPrima'];
  		@$nom=$_POST['Nombre'];
  		@$cat=$_POST['Categoria'];
  		@$un=$_POST['Unidad'];
		@$can=$_POST['Cantidad'];
  		@$urg=$_POST['Urgencia'];
		

         if(isset($idm) and isset($nom) and isset($cat) and isset($un) and isset($can) and isset($urg))
  		{
		
        $cons=mysqli_query($conecta,"insert into requisicion values('$idm','$nom','$cat','$un','$can','$urg');");

		if($conecta)
		     {
		      echo 'registrado correctamente';
			  header("Refresh:3;URL=registroreq.php");
		     }
		    else
		     {
			 echo 'No se agrego el registro  ';

		     }
	   
		}
		

  		
  	
  ?>
  </html>



  
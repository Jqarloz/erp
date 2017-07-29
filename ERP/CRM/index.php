<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERP 8°"C"</title>
</head>
<body>

<!-- Que nunca Falte!!! -->
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
if($_SESSION['accType']!= 20 && $_SESSION['accType']!=100){ 
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo CRM ")';
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
<div class="section blue-grey darken-3">
  <div class="row container">
    <div class="row"> 
	  
      <!-- END Clientes-->
	  <!-- Inicio Clientes -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/01.jpg"> <!-- imagen del proceso-->
            </div>
            <div class="card-content">
			 <!-- nombres de los procesos -->
              <span class="card-title activator grey-text text-darken-4">Registrar nuevos <br>clientes <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Registro de<br>clientes <i class="material-icons right">close</i></span>
              <p>En este proceso.....  descripcion aqui</p> <!-- descripcion de que hace ese modulo-->
            </div>
            <div class="card-action">
              <center><p><a href="../../registrar.php" class="waves-effect waves-light btn amber accent-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
	    
      <!-- END Clientes-->
	  <!-- Inicio Clientes actualizacion-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/02.jpg"> <!-- imagen del proceso-->
            </div>
            <div class="card-content">
			 <!-- nombres de los procesos -->
              <span class="card-title activator grey-text text-darken-4">Actualizar datos <br>clientes <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Actualizar datos <br>clientes <i class="material-icons right">close</i></span>
              <p>En este proceso.....  descripcion aqui</p> <!-- descripcion de que hace ese modulo-->
            </div>
            <div class="card-action">
              <center><p><a href="../../editarPerfil.php" class="waves-effect waves-light btn amber accent-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Clientes actualizacion -->
	  
	   <!-- END Encuesta. -->
	  <!-- Inicio Encuesta.-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/03.jpg"> <!-- imagen del proceso-->
            </div>
            <div class="card-content">
			 <!-- nombres de los procesos -->
              <span class="card-title activator grey-text text-darken-4">Resultados <br> encueasta  <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Resultados.<br> <i class="material-icons right">close</i></span>
              <p>En este proceso.....  descripcion aqui</p> <!-- descripcion de que hace ese modulo-->
            </div>
            <div class="card-action">
              <center><p><a href="pages/Resultados.php" class="waves-effect waves-light btn amber accent-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
	  
	   <!-- END Resultados encuesta -->
	  <!-- Inicio Resultado encuesta -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/04.jpg"> <!-- imagen del proceso-->
            </div>
            <div class="card-content">
			 <!-- nombres de los procesos -->
              <span class="card-title activator grey-text text-darken-4"><br>Encuesta <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Encuesta.<br> <i class="material-icons right">close</i></span>
              <p>En este proceso.....  descripcion aqui</p> <!-- descripcion de que hace ese modulo-->
            </div>
            <div class="card-action">
              <center><p><a href="../../encuesta.php" class="waves-effect waves-light btn amber accent-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
	  
	  
	   <!-- END Datos. -->
	  <!-- Inicio Datos.-->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/05.jpg"> <!-- imagen del proceso-->
            </div>
            <div class="card-content">
			 <!-- nombres de los procesos -->
              <span class="card-title activator grey-text text-darken-4">Datos <br> cliente<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Datos.<br> <i class="material-icons right">close</i></span>
              <p>En este proceso.....  descripcion aqui</p> <!-- descripcion de que hace ese modulo-->
            </div>
            <div class="card-action">
              <center><p><a href="pages/datos.php" class="waves-effect waves-light btn amber accent-4">Mostrar</a></p></center>
            </div>
          </div>
      </div>
	  

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
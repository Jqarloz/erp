<!DOCTYPE html>
<html>
<head>
	<title>Kiosko</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php
	include ("conexion.php");
	//$codigo=$_GET['id'];
	$consulta=mysqli_query($conexion,"select * from inscripcion;");
	while ($res=mysqli_fetch_array($consulta)){
		$cod=$res['id'];	
		$nom=$res['nombre'];
		$cont=$res['contenido'];
		$img=$res['imagen'];
		$vid=$res['video'];
		$tipo=$res['tipo'];
	}

?>
<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo center"><img src="images/upt/1ogo1.png" width="115" height="50"></a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li>
				<a href="#"><i class="material-icons left">event</i>Algo</a>
			</li>
			<li>
				<a href="#"><i class="material-icons left">perm_identity</i>Algo</a>
			</li>
			<li>
				<a href="#"><i class="material-icons left">weekend</i>Algo</a>
			</li>
		</ul>
	</div>
</nav>
</body>
</html>
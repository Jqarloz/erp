<html lang="es">
<head>
</head>
<body>
	<header>...</header>
<?php
    if(!isset($_SESSION)){ 
    session_start(); 
    } 
    include("conexion.php"); 
    include("menu.php"); 
?>
    <div id="main-content">
	
	<!--Raised-->
        <div class="container" style="margin-bottom: 128px;">
            <div class="row">
                <h2 class="center-align">Raised</h2>
                <div class="col s12 center-align">
                    <a class="waves-effect waves-light btn">button</a>
                    <a class="waves-effect waves-light btn"><i class="zmdi zmdi-cloud left"></i>button</a>
                    <a class="waves-effect waves-light btn"><i class="zmdi zmdi-cloud right"></i>button</a>   
                </div>
            </div>
        </div>

        <!--Large-->
        <div class="container" style="margin-bottom: 128px;">
            <div class="row">
                <h2 class="center-align">Large</h2>
                <div class="col s12 center-align">
                    <a class="waves-effect waves-light btn-large">button</a>
                    <a class="waves-effect waves-light btn-large"><i class="zmdi zmdi-cloud left"></i>button</a>
                    <a class="waves-effect waves-light btn-large"><i class="zmdi zmdi-cloud right"></i>button</a>   
                </div>
            </div>
        </div>
	
	</div>
</body>
</html>
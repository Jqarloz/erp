
<?php
	if(!isset($_SESSION)){ 
	session_start(); 
	} 
	include("conexion.php"); 
	include("menu.php");
	include("config.php");
	?>

<section class="ContentPage">
	<div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <?php if (isset($_SESSION['id_usuario'])){ ?><!-- start if -->
                	<?php  
                		@$tabla = $_SESSION['tabla'];
                		@$id = $_SESSION['id_usuario'];
                		if ($tabla=="clientes") {
                			$sql = "SELECT Nombre, img from clientes where idClientes ='$id';";
            				$result = $conecta->query($sql);
            				$row = $result->fetch_assoc();
                		}elseif ($tabla=="empleado") {
                			$sql = "SELECT Nombre, img from empleado where idEmpleado ='$id';";
            				$result = $conecta->query($sql);
            				$row = $result->fetch_assoc();
                		}
                	?>
                	<li><figure><a href="perfil.php"><img class="circle" src="<?php echo "".$row['img']; ?>" alt="UserImage"></a></figure></li>
            		<li><?php echo "".utf8_decode($row['Nombre']); ?></li>
            		<li><a href="logout.php" class="tooltipped waves-effect waves-light btn-flat" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
            	<?php }else{ ?><!-- end if -->
            		<li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
            		<li>Invitado</li>
            		<li><a href="login.php" class="tooltipped waves-effect waves-light btn-flat" data-position="bottom" data-delay="50" data-tooltip="Login"><i class="zmdi zmdi-power"></i></a></li>
            	<?php } ?><!-- end else -->
            </ul>
        </div>

<div class="container col s6 offset-s3"> 
<form name="inicio" method="post">

<table class="responsive-table">
<tr>
				<td><div align="center"><span class="Estilo2">Encuesta.</span></div></td>	
				
	</tr>

<td width="345"><div align="center"><h4><b>Atenci&oacute;n</b></h4></div></td>
<td><div align="left">Desacuerdo.</div></td><td><div align="left">Acuerdo.</div></td>
     <tr>
		
		<td>1. Los empleados son pacientes tomando su orden.</td> 
		<td width="74"> <div align="center">
		 <p> <input type="radio" name="tipo1" id="tip1" value="Desacuerdo"/> <label for="tip1"></label> </p>	 
		</div></td>
	   <td width="95"> <div align="center">
	     <p> <input type="radio" name="tipo1" id="tip2" value="Acuerdo"/> <label for="tip2"> </label> </p>	
	   </div></td>
	</tr>
	
    <td>2. Los empleados son educados con usted.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo2" id="tip3" value="Desacuerdo"/> <label for="tip3"></label> </p>	
	    </div></td>
	   <td width="95"> <div align="center">
	    <p> <input type="radio" name="tipo2" id="tip4"  value="Acuerdo"/> <label for="tip4"></label> </p>	
	   </div></td>
	</tr>
	
	  <td>3. La atenci&oacute;n de los meseros es inmediata.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo3" id="tip5" value="Desacuerdo"/> <label for="tip5"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	    <p> <input type="radio" name="tipo3" id="tip6"  value="Acuerdo"/> <label for="tip6"></label> </p>
	   </div></td>
	</tr>
	  <td>4. La atenci&oacute;n de los empleados es la correcta.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo4" id="tip7" value="Desacuerdo"/> <label for="tip7"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	     <p> <input type="radio" name="tipo4" id="tip8"  value="Acuerdo"/> <label for="tip8"></label> </p>
	   </div></td>
	</tr>
	
	<td>5. La presentaci&oacute;n de los empleados es adecuada.</td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo5" id="tip9" value="Desacuerdo"/> <label for="tip9"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo5" id="tip10"  value="Acuerdo"/> <label for="tip10"></label> </p>
	   </div></td>
	</tr>	
<td width="345"><div align="center"><h4><b>Calidad del producto</b></h4></div></td>
<td><div align="left">Desacuerdo.</div></td><td><div align="left">Acuerdo.</div></td>
     <tr>
		
		<td>1. La comida se sirve caliente y/o fresca.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo6" id="tip11" value="Desacuerdo"/> <label for="tip11"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo6" id="tip12"  value="Acuerdo"/> <label for="tip12"></label> </p>
	   </div></td>
	</tr>
    
	<td>2. Considera sabosa la comida.</td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo7" id="tip13" value="Desacuerdo"/> <label for="tip13"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo7" id="tip14"  value="Acuerdo"/> <label for="tip14"></label> </p>
	   </div></td>
	</tr>
	  
	  <td>3. El men&uacute; presenta sufiente variedad de productos.</td>
		<td width="74"> <div align="center">
		  <p> <input type="radio" name="tipo8" id="tip15" value="Desacuerdo"/> <label for="tip15"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo8" id="tip16"  value="Acuerdo"/> <label for="tip16"></label> </p>
	   </div></td>
	</tr>
	
	<td>4. La comida tiene buena presentaci&oacute;n.</td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo9" id="tip17" value="Desacuerdo"/> <label for="tip17"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	  <p> <input type="radio" name="tipo9" id="tip18"  value="Acuerdo"/> <label for="tip18"></label> </p>
	   </div></td>
	</tr>
	
	  <td>5. Los costos son acordes a la calidad del producto. </td>
		<td width="74"> <div align="center">
		   <p> <input type="radio" name="tipo10" id="tip19" value="Desacuerdo"/> <label for="tip19"></label> </p>
	    </div></td>
	   <td width="95"> <div align="center">
	      <p> <input type="radio" name="tipo10" id="tip20"  value="Acuerdo"/> <label for="tip20"></label> </p>
	   </div></td>
	</tr>


    <tr>
		<td>Quejas:</td>
		<td><textarea name="quejas"></textarea></td>
	</tr>
	
     <tr>
		<td>Sugerencias:</td>
		<td><textarea name="sugerencia"></textarea></td>
	</tr>
	
	
		<td>Nombre Cliente</td>
		<td> <input disabled type="text" name="clientes" value="<?php echo "".utf8_decode($row['Nombre']); ?>">
		</td>
	</tr>
	
	
	<tr>
	  <td colspan="2"><div align="center">
	    <input type="submit" name="Guardar" value="Guardar"/>
	    <input type="button" value="Regresar" onclick="javascript:window.location='../index.php';"/>
	    </div></td>
	</tr>
	
	
</table>
</form>
</div>
</section>


<?php
	@$p1=$_POST['tipo1'];
	@$p2=$_POST['tipo2'];
	@$p3=$_POST['tipo3'];
	@$p4=$_POST['tipo4'];
	@$p5=$_POST['tipo5'];
	@$p6=$_POST['tipo6'];
	@$p7=$_POST['tipo7'];
	@$p8=$_POST['tipo8'];
	@$p9=$_POST['tipo9'];
	@$p10=$_POST['tipo10'];
	@$que=$_POST['quejas'];
	@$sug=$_POST['sugerencia'];
	@$cliente=$_SESSION['id_usuario'];
	
	   if(isset($p1) and isset($p2) and isset($p3) and isset($p4) and isset($p5) and isset($p6) and isset($p7) and isset($p8) and isset($p9) and isset($p10)  and isset($que)  and isset($sug) and isset($cliente))
	   {
		 $inserta=mysqli_query($conecta,"insert into encuesta values(NULL,'$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$que','$sug','$cliente');");
		    if($inserta)
		     {
		     	echo '<script type="text/javascript">';
			    echo 'alert("Registro exitoso.")';
			    echo "</script>";
			    echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
			    $_SESSION['encuesta']= 1;
		     }
		    else
		     {
			 	echo '<script type="text/javascript">';
			    echo 'alert("Algo fallo.")';
			    echo "</script>";
			    echo '<meta http-equiv="Refresh" content="0;URL=encuesta.php">';
		     }
	   }
?>
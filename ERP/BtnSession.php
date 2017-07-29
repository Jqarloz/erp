<?php
	if(!isset($_SESSION)){ 
	  session_start(); 
	} 
	include("../conexion.php");
?>
<div class="fixed-action-btn toolbar">
<a class="btn-floating btn-large red">

<?php if (isset($_SESSION['id_usuario'])){ ?><!-- start if -->
	<?php  
		$sql = "SELECT Nombre, img from empleado where idEmpleado ='$id';";
		$result = $conecta->query($sql);
		$row = $result->fetch_assoc();

		$idType = $_SESSION['accType'];
		$sql2 = "SELECT Tipo from acctipo where id ='$idType';";
		$NomTipo = $conecta->query($sql2);
	?>
	<img class="circle" src="<?php echo "".$row['img']; ?>">
<?php }?><!-- end if -->
</a>
<ul>
  <li class="waves-effect waves-light"><a href="#!"><i class="small material-icons left">format_quote</i><?php echo "".utf8_decode($row['Nombre']); ?></a></li>
  <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>
  <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>
  <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
  <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
</ul>
</div>
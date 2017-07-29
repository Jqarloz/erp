<?php
include("../../../config.php"); 
include("../components.html"); 
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
if($_SESSION['accType']!= 40 || $_SESSION['accType'] != 100){
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores del modulo Compras")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.php">';
}
				@$cv=$_GET['idv'];
				@$p = explode(" ", $cv);
				//echo $p[0];
				//echo $p[1];
				if(isset($cv)){
					$inserta=mysqli_query($conecta,"update pedidopreveedor set Estado_idEstado='3' where idPedidoPreveedor='$p[0]';");
					if($inserta){
						mysqli_query($conecta,"update solicitudcompra set IDEstado='2' where ID='$p[1]';");
						echo '<meta http-equiv="Refresh" content="0;URL=consulta-pedidos.php">';
						print '<script language="JavaScript">'; 
						print 'alert("Pedido cancelado");';
						print '</script>';
					}
					else{
						print '<script language="JavaScript">';
						print 'alert("Pedido no cancelado");';
						print '</script>';
					}
				}
				mysqli_close($conecta);
?>
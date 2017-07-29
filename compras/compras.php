<?php
include "../conexion.php";
		
		session_start();
		$arreglo=$_SESSION['carrito'];
		@$fecha=date("Y-m-d");
		$total=0;
		for($i=0;$i<count($arreglo);$i++){
			$total=$total+($arreglo[$i]['Cantidad'] * $arreglo[$i]['precio']);			
		}
		$inserta=mysqli_query($conecta,"insert into ventas values(NULL,'$fecha','$total');");
		if($inserta){
			@$consulta_id=mysqli_query($conecta,"select idVentas from ventas;");
			@$nr=mysqli_num_rows($consulta_id);
			$ic = $_SESSION['id_usuario'];
			$inserta2=mysqli_query($conecta,"insert into pedidoscliente values(NULL,'$fecha',NULL,NULL,'$ic','$nr','1');");
			if($inserta2){
				for($i=0; $i<count($arreglo);$i++){
					$inserta=mysqli_query($conecta,"insert into pedidoscliente_has_platillo values('".$nr."','".$arreglo[$i]['Id']."','".$arreglo[$i]['Cantidad']."','".($arreglo[$i]['precio']*$arreglo[$i]['Cantidad'])."');");
				}
				header("Refresh:0.0; URL=imprimir.php");
			}
		}
		else{
			print '<script language="JavaScript">'; 
			print 'alert("Pedido no creado");';
			print '</script>';
		}
?>
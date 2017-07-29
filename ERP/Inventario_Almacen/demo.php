<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Formato de Rechazo</title>
    <body>
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
<center>

<br>
<h3 class="gen" align="center">Formato de devoluci&oacute;n de mercanc&iacute;a</h3>

<form method="post" action="facturas/facturas.php">
    <button type="submit" class="button">Generar Formato.pdf</button>
    
    
    <h3 class="gen" align="center">Requisitos</h3>
    
<table style="width:40%;">
 <tr>
    <td  align="center">fecha:
    <input type="text" name="fecha" value="<?php echo date("d-m-Y"); ?>" size="15" readonly></td>
 </tr>
 <tr>
 </tr>
 <tr>
 <td>
 Datos del proveedor
 </td>
 </tr>
 <tr>
    <td  align="center">nombre de la empresa:</td>
    <td  align="center"><select name="nombre_cliente">
        <option> </option>
        <option>Coca Cola</option>
        <option>Pepsi</option>
        <option>La Costeña</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        
	<?php /*
		include("conexion.php");
		$consulta_proveedor=mysqli_query($conecta,"select * from proveedores order by Nombre;");
		while($resultadosssss=mysqli_fetch_array($consulta_proveedor))
		{
			echo'<option value='.$resultadosssss['idProveedores'].'>'.$resultadosssss['Nombre'].'</option>';
		}*/
	?>      
			</select>   
    </td>
 </tr>
 <tr>
    <td align="center">correo electronico de la empresa:</td>
    <td align="center">  <select name="correo_cliente">
        <option> </option>
        <option>cocacola@cocacola.com.mx</option>
        <option>pepsi@pepsi.com.mx</option>
        <option>lacosteña@lacosteña.com.mx</option>
        <option>...@....com</option>
        <option>...@....com</option>
        <option>...@....com</option>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        	
			</select>
    </td>
 </tr>
 <tr>
    <td align="center">telefono de la empresa:</td>
    <td align="center">  <select name="telefono_cliente">
        <option> </option>
        <option>7348723648</option>
        <option>8374928734</option>
        <option>0237483846</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        	
			</select>
    </td>
 </tr>
 <tr>
    <td align="center">entregado por:</td>
    <td align="center">  <select name="persona_cliente">
        <option> </option>
        <option>Marco Antonio Muñoz Campech</option>
        <option>Rodrigo Caloch Gutierrez</option>
        <option>Feliz Pino Lopez</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        	
			</select>
    </td>
 </tr>
 	<tr>
    <td align="center">No. de Solucitud:</td>
    <td align="center">
    <input type="text" name="factura_cliente">
        </td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
 <tr>
 		<td>
        		Razon de la devoluci&oacute;n
     	</td>
                 
                </tr>
                 <tr>
        	<td >
        			<input name="razon" type="radio" id="1" value="1"/>
                    <label for="1">Recibi un Producto equivocado </label>
        		</td>
    		</tr>
            <tr>
        		<td>
        			<input name="razon" type="radio" id="2" value="2"/>
                    <label for="2">El producto viene en mal estado</label> 
        		</td>
    		</tr>
            <tr>
        		<td>
        			 <input name="razon" type="radio" id="3" value="3"/>
                     <label for="3">Cambio de mercancia</label>
        		</td>
    		</tr>
            <tr>
        		<td>
        			<input name="razon" type="radio" id="4" value="4"/>
                    <label for="3">El producto no fue solicitado</label> 
        		</td>
    		</tr>
            <tr>
        		<td>
        			 <input name="razon" type="radio" id="5" value="5"/>
                     <label for="3">El producto esta incompleto</label>
        		</td>
    		</tr>
            
 </table>



<table class="rwd-table2">
 <tr>
    <td></td>
    <td> <input type="hidden" name="iva" value="100xbfbdn" size="123"> </td>
 </tr>
 <tr>
    <td></td>
    <td><input type="hidden" name="gastos_de_envio" value="sfghkulxtgdrf" size="1234"></td>
 </tr>
</table>


<?php 
//Demo de Array de productos simulando extracción de datos de una base de datos.
$array_productos = array
(
"unidades" => array("", "",""), 
"productos" => array("", "", ""),
"precio_unidad" => array("", "", "")
);
$x = 0;
while($x <= count($array_productos["unidades"]) - 1)
{
echo 
"
<tr>
<td>".$array_productos["unidades"][$x]."</td>
<td>".$array_productos["productos"][$x]."</td>
<td>".$array_productos["precio_unidad"][$x]."</td>
</tr>
";
$x++;
}
// A continuación se guardan en variables los datos de los productos, separados por comas
// que luego serán extraídos a través de la función explode a la hora de generar la factura
$unidades = implode(",", $array_productos["unidades"]);
$productos = implode(",", $array_productos["productos"]);
$precio_unidad = implode(",", $array_productos["precio_unidad"]);
// A continuación se guardarán los datos de los productos a través de campos ocultos
?>

<input type="hidden" name="unidades" value="<?php// echo $unidades; ?>">
<input type="hidden" name="productos" value="<?php//echo $productos; ?>">
<input type="hidden" name="precio_unidad" value="<?php// echo $precio_unidad; ?>">
<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_Ticket" value="true">

</form>
</center>
</body>
</html>
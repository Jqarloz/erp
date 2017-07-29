<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>TICKET PDF</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<body>
<!-- Que nunca Falte!!! -->
<!-- Que nunca Falte!!! -->
<?php 
include("../../../config.php"); 
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
<!-- ok --><!-- ok -->

<center>

<br>
<form method="post" action="facturas/facturas.php">
    
    <h5 class="gen" align="center">DATOS DE TICKET</h5>
    
<table style="width:30%;" >
 <tr>
    <td align="center">ID de Ticket:</td>
    <td><input type="text" name="id_tiket" value="1" size="5" readonly></td>
 </tr>
 <tr>
    <td  align="center">fecha emisi&oacute;n de ticket:</td>
    <td><input type="text" name="fecha_tiket" value="<?php echo date("d-m-Y"); ?>" size="15" readonly></td>
 </tr>
 <tr>
    <td  align="center">Nombre del Producto:</td>
    <td  align="center"><select name="nombre_cliente">
        <option>             
            </option>
			<option>
            Coca Cola 
            </option>
            <option>
            Mayonesa 
            </option>
            <option>
            Arina 
            </option>
			
			</select>   
    </td>
 </tr>
 <tr>
    <td align="center">Unidad del Producto:</td>
    <td align="center">  <select name="apellidos_cliente">
        <option>             
            </option>
			<option>
            Piezas 
            </option>
            <option>
            Kilogramos 
            </option>
            <option>
            litros 
            </option>
			
			</select>
    </td>
 </tr>
 <tr>
    <td align="center">Temperatura del Producto:</td>
    <td align="center">
    <select name="direccion_cliente">
        <option>             
            </option>
			<option>
            20°
            </option>
            <option>
            3° 
            </option>
            <option>
            30° 
            </option>
			
		  </select>
        </td>
 </tr>
 <tr><td colspan="2">
 <center><button type="submit" class="button">GENERAR ETIQUETA</button></center>
 </td></tr>
 </table>



<table class="rwd-table2">
 <tr>
    <td></td>
    <td> <input type="hidden" name="iva" value="" size=""> </td>
 </tr>
 <tr>
    <td></td>
    <td><input type="hidden" name="gastos_de_envio" value="" size=""></td>
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
</table>

<input type="hidden" name="unidades" value="<?php echo $unidades; ?>">
<input type="hidden" name="productos" value="<?php echo $productos; ?>">
<input type="hidden" name="precio_unidad" value="<?php echo $precio_unidad; ?>">
<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_Ticket" value="true">
</form>
<br><br><br><br>

</table>

</body>
</html>
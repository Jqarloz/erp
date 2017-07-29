<?php
if ($_POST["generar_Ticket"] == "true")
{

//Recibir detalles de factura
$fechas = $_POST["fecha"];

//Recibir los datos del cliente
$nombre_cliente = $_POST["nombre_cliente"];
$correo_cliente = $_POST["correo_cliente"];
$telefono_cliente = $_POST["telefono_cliente"];
$persona_cliente = $_POST["persona_cliente"];
$factura_cliente = $_POST["factura_cliente"];

//devolucion
$razones = $_POST["razon"];

//Recibir los datos de los productos
$iva = $_POST["iva"];
$gastos_de_envio = $_POST["gastos_de_envio"];
$unidades = $_POST["unidades"];
$productos = $_POST["productos"];
$precio_unidad = $_POST["precio_unidad"];

//variable que guarda el nombre del archivo PDF
//$archivo="ticket-$id_ticket.pdf";
$archivo="ticket.pdf";

//Llamada al script fpdf
require('fpdf.php');


$archivo_de_salida=$archivo;

$pdf=new FPDF();  //crea el objeto
$pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.



//logo de la tienda
//$pdf->Image('../empresa.png' , 10 ,10, 60 , 40,'png', 'http://php-estudios.blogspot.com');

// Encabezado de la factura
$pdf->SetFont('Arial','B',20);
$pdf->Cell(200, 5, "Formato de Rechazo", 0, 2, "C");
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(200,10, "Fecha: $fechas", 0, "C", false);
$pdf->Ln(1);



// Datos de la proveedor
$pdf->SetFont('Arial','B',15);
$top_datos=45;
$pdf->SetXY(70, $top_datos);
$pdf->Cell(250, 10, "Datos del proveedor:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190, //posición X
5, //posición Y
//$nombre_tienda."\n".
//"Dirección: ".$direccion_tienda."\n".
//"Población: ".$poblacion_tienda."\n".
//"Provincia: ".$provincia_tienda."\n".
//"Código Postal: ".$codigo_postal_tienda."\n".
//"Teléfono: ".$telefono_tienda."\n".
//"Fax: ".$fax_tienda."\n".
//"Indentificación Fiscal: ".$identificacion_fiscal_tienda,
// bordes 0 = no | 1 = si
// texto justificado 
 false);


// Datos del cliente
$pdf->SetFont('Arial','B',18);
$pdf->SetXY(5, $top_datos);
$pdf->Cell(100, 20, "", 0, 2, "J");
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(
190, //posición X
15, //posicion Y

"Nombre de la empresa: ".$nombre_cliente."\n".
"Correo de la empresa: ".$correo_cliente."\n".
"Telefono de la empresa: ".$telefono_cliente."\n".

false);

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(100, $top_datos);
$pdf->Cell(200, 20, "", 0, 2, "J");
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(
200, //posición X
15, //posicion Y

"Entregado por: ".$persona_cliente."\n".
"           No. de Solicitud: ".$factura_cliente."\n".

false);

//Salto de línea
$pdf->Ln(2);


// Datos de la devolucion
$pdf->SetFont('Arial','B',10);
$top_datos=90;
$pdf->SetXY(100, $top_datos);
$pdf->Cell(150, 60, "Marque con una X la opción deseada", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190, //posición X
5, //posición Y
//$nombre_tienda."\n".
//"Dirección: ".$direccion_tienda."\n".
//"Población: ".$poblacion_tienda."\n".
//"Provincia: ".$provincia_tienda."\n".
//"Código Postal: ".$codigo_postal_tienda."\n".
//"Teléfono: ".$telefono_tienda."\n".
//"Fax: ".$fax_tienda."\n".
//"Indentificación Fiscal: ".$identificacion_fiscal_tienda,
// bordes 0 = no | 1 = si
// texto justificado 
 false);


// Datos de la devolucion
$pdf->SetFont('Arial','B',18);
$pdf->SetXY(5, $top_datos);
$pdf->Cell(100, 45, "", 0, 2, "J");
$pdf->SetFont('Arial','',12);
//razon 1
if($razones==1)
{
	$pdf->Image('cuadroconmarca.jpg' , 5 ,136, 7 , 7,'JPG', '');
}
else
{
	$pdf->Image('cuadrosinmarca.jpg' , 5 ,136, 7 , 7,'JPG', '');
}
//razon 2
if($razones==2)
{
	$pdf->Image('cuadroconmarca.jpg' , 5 ,146, 7 , 7,'JPG', '');
}
else
{
	$pdf->Image('cuadrosinmarca.jpg' , 5 ,146, 7 , 7,'JPG', '');
}
//razon 3
if($razones==3)
{
	$pdf->Image('cuadroconmarca.jpg' , 5 ,156, 7 , 7,'JPG', '');
}
else
{
	$pdf->Image('cuadrosinmarca.jpg' , 5 ,156, 7 , 7,'JPG', '');
}
//razon 4
if($razones==4)
{
	$pdf->Image('cuadroconmarca.jpg' , 5 ,166, 7 , 7,'JPG', '');
}
else
{
	$pdf->Image('cuadrosinmarca.jpg' , 5 ,166, 7 , 7,'JPG', '');
}
//razon 5
if($razones==5)
{
	$pdf->Image('cuadroconmarca.jpg' , 5 ,176, 7 , 7,'JPG', '');
}
else
{
	$pdf->Image('cuadrosinmarca.jpg' , 5 ,176, 7 , 7,'JPG', '');
}


$pdf->MultiCell(
100, //posición X
10, //posicion Y

//imagen
"      Recibi un Producto equivocado \n".
"      El producto viene en mal estado  \n".
"      Cambio de mercancia \n".
"      El producto no fue solucitado \n".
"      El producto esta incompleto \n".
false);

//Salto de línea
$pdf->Ln(2);

// Datos de la firma1
$pdf->SetFont('Arial','B',10);
$top_datos=190;
$pdf->SetXY(10, $top_datos);
$pdf->Cell(100, 50, "firma de almacenista", 0, 2, "J");

// Datos de la firma2
$pdf->SetFont('Arial','B',10);
$top_datos=190;
$pdf->SetXY(70, $top_datos);
$pdf->Cell(100, 50, "firma de compras ", 0, 2, "J");

// Datos de la firma3
$pdf->SetFont('Arial','B',10);
$top_datos=190;
$pdf->SetXY(140, $top_datos);
$pdf->Cell(100, 50, "firma del proveedor ", 0, 2, "J");

//Salto de línea
$pdf->Ln(2);

// Datos de la firma1
$pdf->SetFont('Arial','B',10);
$top_datos=215;
$pdf->SetXY(10, $top_datos);
$pdf->Cell(50, 20, "__________________", 0, 2, "J");

// Datos de la firma2
$pdf->SetFont('Arial','B',10);
$top_datos=215;
$pdf->SetXY(70, $top_datos);
$pdf->Cell(50, 20, "_______________", 0, 2, "J");

// Datos de la firma3
$pdf->SetFont('Arial','B',10);
$top_datos=215;
$pdf->SetXY(140, $top_datos);
$pdf->Cell(50, 20, "______________", 0, 2, "J");



// extracción de los datos de los productos a través de la función explode
$e_productos = explode(",", $productos);
$e_unidades = explode(",", $unidades);
$e_precio_unidad = explode(",", $precio_unidad);

//Creación de la tabla de los detalles de los productos productos
$top_productos = 110;
    $pdf->SetXY(45, $top_productos);
    $pdf->Cell(40, 5, '', 0, 1, 'C');
    $pdf->SetXY(80, $top_productos);
    $pdf->Cell(40, 5, '', 0, 1, 'C');
    $pdf->SetXY(115, $top_productos);
    $pdf->Cell(40, 5, '', 0, 1, 'C');    

$precio_subtotal = 0; // variable para almacenar el subtotal
$y = 115; // variable para la posición top desde la cual se empezarán a agregar los datos
$x=0;
while($x <= count($e_productos) - 1)
{
//$pdf->SetFont('Arial','',8);
       
  // $pdf->SetXY(45, $y);
   // $pdf->Cell(40, 5, $e_unidades[$x], 0, 1, '');
    //$pdf->SetXY(80, $y);
    //$pdf->Cell(40, 5, $e_productos[$x], 0, 1, '');
    //$pdf->SetXY(115, $y);
    //$pdf->Cell(40, 5, $e_precio_unidad[$x]."", 0, 1, '');

//Cálculo del subtotal 	
$precio_subtotal += $e_precio_unidad[$x] * $e_unidades[$x];
$x++;

// aumento del top 5 cm
$y = $y + 5;
}

//Cálculo del Impuesto
$add_iva = $precio_subtotal * $iva / 100;

//Cálculo del precio total
$total_mas_iva = round($precio_subtotal + $add_iva + $gastos_de_envio, 2);

$pdf->Ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(190, 5, "", 0, 1, "C");
$pdf->Cell(190, 5, "", 0, 1, "C");
$pdf->Cell(190, 5, "", 0, 1, "C");
$pdf->Cell(190, 5, "", 0, 1, "C");


$pdf->Output($archivo_de_salida);//cierra el objeto pdf

//Creacion de las cabeceras que generarán el archivo pdf
header ("Content-Type: application/download");
header ("Content-Disposition: attachment; filename=$archivo");
header("Content-Length: " . filesize("$archivo"));
$fp = fopen($archivo, "r");
fpassthru($fp);
fclose($fp);

//Eliminación del archivo en el servidor
unlink($archivo);
}
?>




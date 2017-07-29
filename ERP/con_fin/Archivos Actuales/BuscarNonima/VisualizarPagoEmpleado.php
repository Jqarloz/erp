<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Visualizar Pago Empleado</title>
<meta name="" content="">
</head>
<body>
<h3 align="center">Visualizar Pago Empleado</h3>

		
<form method="post" action="ImprimirPago.php">
				<table border="1" align="center" cellpadding="5" cellspacing="5">
					<tr>
						<td>ID Empleado:</td>
						<td><input maxlength="20" type="number" name="idempleado"  placeholder="ID Empleado" required="required"/></td>
					</tr>
					
					<tr>
						<td>Nombre Empleado:</td>
						<td><input type="text" name="nombreE" placeholder="Nombre Empleado" required="required"/></td>
						
					</tr>
					
					<tr>
						<td align="center" colspan="2">Ingresa El Periodo de Pago</td>
						
					</tr>
					
	
					
					<tr>
						<td align="center">Fecha Inicial</td>
						<td align="center"><input type="date" name="fechai" required="required"/></td>
						
						
					</tr>
					
					<tr>
					
						<td align="center">Fecha Final</td>
						<td align="center"><input type="date" name="fechaf" required="required"/></td>
					</tr>
					
				
					
					<tr>	
						<td colspan="2" align="center">
						<input type="submit" name="buscar" value="Buscar"/></td>
					</tr>
																		
					</table>
			</form>
								<br/><br/>

</body>
</html>
 <?php
date_default_timezone_set('mexico/general');
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=ventas".date("d-m-y").".xls");
?>
<HTML LANG="es">
<TITLE>::. Exportacion de Datos .::</TITLE>
</head>
<body>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$fch1=date("Y-m")."-01"." 00:00:00";
$fch2=date("Y-m")."-31"." 23:59:59";
$sql = "select ventasticket.idProducto as id,productos.descripcion as nombre, SUM(ventasticket.cantidad) as cantidad,SUM(ventasticket.importe) as importe from tickets inner join ventasticket on tickets.idTicket=ventasticket.idTicket inner join productos on ventasticket.idProducto=productos.idProducto where tickets.tpago='0' and tickets.fecha BETWEEN '$fch1' AND '$fch2' group by ventasticket.idProducto
";
$result=mysql_query($sql,$IdConexion);
?>
Acumulado de ventas en efectivo.
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
 <thead>
 <tr>
 <th>ID</th>
 <th>Nombre</th>
 <th>Cantidad</th>
 <th>Importe</th>
 </tr>
 </thead>
 <tbody>
 <?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
</tr>", $row['id'],$row['nombre'],$row['cantidad'],$row['importe']);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la Conexión
?>
</tbody>
</table>

<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$fch1=date("Y-m")."-01"." 00:00:00";
$fch2=date("Y-m")."-31"." 23:59:59";
$sql = "select ventasticket.idProducto as id,productos.descripcion as nombre, SUM(ventasticket.cantidad) as cantidad,SUM(ventasticket.importe) as importe from tickets inner join ventasticket on tickets.idTicket=ventasticket.idTicket inner join productos on ventasticket.idProducto=productos.idProducto where  tickets.tpago='1' and tickets.fecha BETWEEN '$fch1' AND '$fch2' group by ventasticket.idProducto
";
$result=mysql_query($sql,$IdConexion);
?>
Acumulado de ventas con tarjeta.
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
 <thead>
 <tr>
 <th>ID</th>
 <th>Nombre</th>
 <th>Cantidad</th>
 <th>Importe</th>
 </tr>
 </thead>
 <tbody>
 <?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
</tr>", $row['id'],$row['nombre'],$row['cantidad'],$row['importe']);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la Conexión
?>
</tbody>
</table>

<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$fch1=date("Y-m")."-01"." 00:00:00";
$fch2=date("Y-m")."-31"." 23:59:59";
$sql = "SELECT * FROM pagos where fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
?>
Acumulado de salidas.
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
 <thead>
 <tr>
 <th>Concepto</th>
 <th>Cantidad</th>
 <th>Fecha</th>
 </tr>
 </thead>
 <tbody>
 <?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
</tr>", $row['concepto'],$row['cantidad'],$row['fecha']);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la Conexión
?>
</body>
</html>